@extends('user.dashboard.layouts.main')

@section('container')
<h1 class="text-3xl font-bold text-gray-900 dark:text-white">Edit Product</h1>

<div>
    <form method="post" action="/dashboard/products/{{ $product->slug }}" enctype="multipart/form-data">
    @method('put')    
    @csrf
        <div class="mb-4 mt-3">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama')
                        valid:border-red-500
                        @enderror" placeholder="iPhone 13 Pro Max" required autofocus value="{{ old('nama', $product->nama) }}">
            @error('nama')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug')
                        valid:border-red-500
                        @enderror" placeholder="iphone-13-pro-max" required value="{{ old('slug', $product->slug) }}">
            @error('slug')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option disabled selected>Choose a category</option>
                @foreach ($categories as $category)
                @if (old('category_id', $product->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                @endif
                @endforeach
            </select>
            @error('category_id')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
            <input type="number" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('harga')
                        valid:border-red-500
                        @enderror" placeholder="1000000" required value="{{ old('harga', $product->harga) }}">
            @error('harga')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('deskripsi')
                        valid:border-red-500
                        @enderror" placeholder="Ini adalah hp terbaru..." required>
                        {{ old('deskripsi', $product->deskripsi) }}</textarea>
            @error('deskripsi')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Gambar</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="gambar" type="file" name="gambar">
            @error('gambar')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        @if($product->gambar)
        <div class="mb-4">
            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Saat Ini :</p>
            <img src="{{ asset('/storage/products/'.$product->gambar) }}" alt="{{ $product->nama }}" class="w-32 h-32 object-cover rounded-lg shadow-md">
            <input type="hidden" name="old_image" value="{{ $product->gambar }}">
        </div>
        @endif
        <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="flex justify-center items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Update Product
            </span>
        </button>
        <a id="cancelButton" href="/dashboard/products">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-yellow-300 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="flex justify-center items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Batal
                </span>
            </button>
        </a>
    </form>
</div>

<script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/dashboard/products/checkSlug?nama=' + nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.getElementById('cancelButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = this.getAttribute('href');
    });
</script>
@endsection