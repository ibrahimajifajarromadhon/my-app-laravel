@extends('user.layouts.main')

@section('container')
<h1 class="text-5xl mx-4 font-bold text-gray-900 dark:text-white mb-3">All Products</h1>

@include('user.partials.carousel')
<div class="flex justify-center my-5">

    <form class="w-1/2" action="/product">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('shop'))
        <input type="hidden" name="shop" value="{{ request('shop') }}">
        @endif
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                @foreach ($categories as $category)
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" value="{{ $category->nama }}">{{ $category->nama }}</button>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="relative w-full">
                <input name="search" type="search" value="{{ request('search') }}" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Product..." required>
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>

</div>


<div class="flex flex-wrap justify-center gap-5">
    @forelse ($products as $product)
    <div class="flex flex-wrap justify-center gap-5">
        <div class="w-full max-w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="px-5 pb-5">
                <a href="/product/{{ $product->slug }}">
                    <img class="p-4 rounded-t-lg w-full h-72 object-cover" src="{{ asset('/storage/products/'.$product->gambar) }}" alt="{{ $product->nama }}" />
                </a>
                <a href="/product/{{ $product->slug }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->nama }}</h5>
                </a>
                <p class="mt-3">By <a href="/product?shop={{ $product->shop->nama_toko }}" class="text-blue-700 font-semibold mt-2">{{ $product->shop->nama }}</a> in <a href="/product?category={{ $product->category->slug }}" class="text-red-700 font-semibold mt-2">{{ $product->category->nama }}</a></p>
                <div class="flex items-center justify-between mt-3">
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

<div class="flex flex-wrap justify-center my-5">
{{ $products->links() }}
</div>

@endsection