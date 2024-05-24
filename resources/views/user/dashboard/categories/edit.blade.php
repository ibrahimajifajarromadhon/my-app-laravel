@extends('user.dashboard.layouts.main')

@section('container')
<h1 class="text-3xl font-bold text-gray-900 dark:text-white">Edit Category</h1>

<div>
    <form method="post" action="/dashboard/categories/{{ $category->slug }}">
    @method('put')    
    @csrf
        <div class="mb-4 mt-3">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Category</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama')
                        valid:border-red-500
                        @enderror" placeholder="Elektronik" required autofocus value="{{ old('nama', $category->nama) }}">
            @error('nama')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug')
                        valid:border-red-500
                        @enderror" placeholder="elektronik" required value="{{ old('slug', $category->slug) }}">
            @error('slug')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Error!</span> {{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="flex justify-center items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Update Category
            </span>
        </button>
        <a id="cancelButton" href="/dashboard/categories">
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
        fetch('/dashboard/categories/checkSlug?nama=' + nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.getElementById('cancelButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = this.getAttribute('href');
    });
</script>
@endsection