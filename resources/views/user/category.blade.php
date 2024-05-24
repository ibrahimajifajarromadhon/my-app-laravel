@extends('user.layouts.main')

@section('container')
<div class="flex flex-wrap justify-center gap-5">
    @forelse ($products as $product)
    <div class="flex flex-wrap justify-center gap-5">
        <div class="w-full max-w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="px-5 pb-5">
                <a href="/product/{{ $product->slug }}">
                    <img class="p-4 rounded-t-lg" src="{{ $product->gambar }}" alt="product image" />
                </a>
                <a href="/product/{{ $product->slug }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->nama }}</h5>
                </a>
                <a href="/categories/{{ $product->category->slug }}"><p class="text-green-700 font-semibold mt-2">{{ $product->category->nama }}</p>
                </a>
                <div class="flex items-center justify-between">
                    <span class="text-1xl font-bold text-yellow-500 dark:text-white">Rp. {{ $formattedPrice = number_format($product->harga, 0, ',', '.') }},-</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="">
        <div class="alert alert-danger">
            Data Produk belum Tersedia.
        </div>
    </div>
    @endforelse
</div>

@endsection