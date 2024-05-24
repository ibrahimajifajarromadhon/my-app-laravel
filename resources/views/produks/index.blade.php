<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-12">
                <div style="font-family: Montserrat;">
                    <h2 class="text-center my-3">Daftar Produk</h2>
                    <h5 class="text-center" style="color: blue;">Toko Abadi Jaya</h5>
                </div>
                <hr>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('produks.create') }}" class="btn btn-md btn-success mb-3" style="font-weight: 600;">Tambah Produk</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              @forelse ($produks as $produk)
                                <tr>
                                    <td>{{ $produk->nama }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>{!! $produk->deskripsi !!}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/produks/'.$produk->gambar) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus {{$produk->nama}} ?');" action="{{ route('produks.destroy', $produk->id) }}" method="POST">
                                            <a href="{{ route('produks.show', $produk->id) }}" class="btn btn-sm btn-dark" style="font-weight: 600;">Lihat</a>
                                            <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-sm btn-primary" style="font-weight: 600;">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" style="font-weight: 600;">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Produk belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          <div class="d-flex justify-content-center">
                          {{ $produks->links() }}
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>