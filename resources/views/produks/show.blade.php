<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $produk->nama }}</h3>
                        <img src="{{ asset('storage/produks/'.$produk->gambar) }}" class="w-100 rounded mt-3">
                        <h5 class="mt-3">Rp. {{ $produk->harga }},-</h5>
                        <p>
                            {!! $produk->deskripsi !!}
                        </p>
                        <button class="btn btn-md btn-warning"><a class="text-decoration-none" style="color: white; font-weight: 600;" href="{{ route('produks.index') }}">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>