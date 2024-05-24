@extends('user.dashboard.layouts.main')

@section('container')
<h1 class="text-3xl font-bold text-gray-900 dark:text-white">Detail Product</h1>
<div class="mt-5">
    <a href="/dashboard/products"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-yellow-300 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
            <span class="flex justify-center items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                Back to all product
            </span>
        </button></a>
    <a href="/dashboard/products/{{ $product->slug }}/edit"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="flex justify-center items-center relative px-3 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                </svg>
                Edit
            </span>
        </button></a>
    <form action="/dashboard/products/{{ $product->slug }}" method="post" class="inline">
        @method('delete')
        @csrf
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800" onclick="return confirm('Kamu Yakin Menghapus Product Ini?')">
            <span class="flex justify-center items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                </svg>
                Hapus
            </span>
        </button>
    </form>

</div>
<div class="w-full flex flex-wrap dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full py-3 flex justify-center">
        <img class="rounded-lg" src="{{ asset('/storage/products/'.$product->gambar) }}" alt="{{ $product->nama }}" />
    </div>
    <div class="text-justify">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $product->nama }}</h1>
        <p>By <a href="/product?shop={{ $product->shop->nama_toko }}" class="text-blue-700 font-semibold">{{ $product->shop->nama }}</a> in <a href="/product?category={{ $product->category->slug }}" class="text-red-700 font-semibold mt-2">{{ $product->category->nama }}</a></p>
        <span class="text-1xl font-bold text-yellow-400 dark:text-white">Rp. {{ $formattedPrice = number_format($product->harga, 0, ',', '.') }},-</span>
        <p class="text-center mb-5">{!! $product->deskripsi !!}</p>
    </div>
</div>
@endsection