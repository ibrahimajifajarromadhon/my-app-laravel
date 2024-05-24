@extends('user.layouts.main')

@section('container')
<h1 class="text-5xl mx-4 font-bold text-gray-900 dark:text-white mb-3">Detail Product</h1>
<div class="w-full px-5 flex flex-wrap dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full py-5 flex justify-center">
        <img class="rounded-xl w-full h-full object-cover" src="{{ asset('/storage/products/'.$product->gambar) }}" alt="{{ $product->nama }}" />
    </div>
    <div class="text-justify mb-3">
        <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->nama }}</h5>
        <p>By <a href="/product?shop={{ $product->shop->nama_toko }}" class="text-blue-700 font-semibold mt-2">{{ $product->shop->nama }}</a> in <a href="/product?category={{ $product->category->slug }}" class="text-red-700 font-semibold mt-2">{{ $product->category->nama }}</a></p>
        <span class="text-1xl font-bold text-yellow-400 dark:text-white">Rp. {{ $formattedPrice = number_format($product->harga, 0, ',', '.') }},-</span>
        <p class="mb-5">{!! $product->deskripsi !!}</p>
        <div class="mt-3">
            <a href="/product">
                <button class="inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-yellow-300 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span class="flex justify-center items-center px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                        </svg>
                        Back to all product
                    </span>
                </button>
            </a>
        </div>
    </div>
</div>
@endsection