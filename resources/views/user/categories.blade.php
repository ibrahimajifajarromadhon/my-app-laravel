@extends('user.layouts.main')

@section('container')
<h1 class="text-5xl mx-4 font-bold text-gray-900 dark:text-white mb-3">All Categories</h1>

<div class="flex flex-wrap my-4 md:my-8 lg:my-6 mx-2.5">
    @forelse ($categories as $category)
    <div class="w-full md:w-1/3 px-2 mb-5">
        <a href="/product/{{ $category->slug }}">
            <figure class="relative transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                <a href="/product/{{ $category->slug }}">
                    <img class="rounded-lg w-full h-56 md:h-auto md:max-h-56 object-cover" src="https://source.unsplash.com/500x500?{{ $category->nama }}" alt="image description">
                </a>
                <figcaption class="absolute inset-0 flex justify-center items-center text-center">
                    <p class="text-white font-bold text-lg bg-black bg-opacity-50 rounded-lg px-4 py-2">{{ $category->nama }}</p>
                </figcaption>
            </figure>
        </a>
    </div>
    @empty
    <div class="w-full">
        <div class="alert alert-danger">
            Data Produk belum Tersedia.
        </div>
    </div>
    @endforelse
</div>

@endsection
