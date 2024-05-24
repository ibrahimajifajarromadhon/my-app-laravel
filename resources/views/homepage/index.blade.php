@include('homepage.layout.header')

<div class="container mx-auto">
    <h1 class="text-center m-5 text-4xl font-mono text-green-500">SELAMAT DATANG DI TOKO ABADI JAYA</h1>
    <div class="flex flex-wrap justify-center gap-5">

        @forelse ($produks as $produk)
        <div class="w-full max-w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{ asset('/storage/produks/'.$produk->gambar) }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}</h5>
                </a>
                <div class="flex items-center justify-between">
                    <span class="text-1xl font-bold text-yellow-500 dark:text-white">Rp. {{  $formattedPrice = number_format($produk->harga, 0, ',', '.') }},-</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
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
</div>

@include('homepage.layout.footer')