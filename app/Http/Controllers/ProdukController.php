<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\RedirectResponse;

use Illuminate\View\View;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index(): View
    {
        $produks = Produk::latest()->simplePaginate(3);

        return view('produks.index', compact('produks'));
    }

    public function create(): View
    {
        return view('produks.create');
    }

    public function store(Request $request): RedirectResponse 
    {
        $this->validate($request, [
            'nama'     => 'required|min:5',
            'harga'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $gambar = $request->file('gambar');
        $gambar -> storeAs('public/produks', $gambar->hashName());

        Produk::create([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambar->hashName(),
        ]);

        return redirect()->route('produks.index')->with(['success' => 'Data Produk Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $produk = Produk::findOrFail($id);

        return view('produks.show', compact('produk'));
    }

    public function edit(string $id): View
    {
        $produk = Produk::findOrFail($id);

        return view('produks.edit', compact('produk'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'      => 'required|min:5',
            'harga'     => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'gambar'    => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //get produk by ID
        $produk = Produk::findOrFail($id);

        //check if gambar is uploaded
        if ($request->hasFile('gambar')) {

            //upload new gambar
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/produks', $gambar->hashName());

            //delete old gambar
            Storage::delete('public/produks/'.$produk->gambar);

            //update produk with new gambar
            $produk->update([
                'nama'      => $request->nama,
                'harga'     => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar'    => $gambar->hashName(),
            ]);

        } else {

            //update produk without gambar
            $produk->update([
                'nama'      => $request->nama,
                'harga'     => $request->harga,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        //redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Produk Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get produk by ID
        $produk = Produk::findOrFail($id);

        //delete produk
        Storage::delete('public/produks/'. $produk->gambar);

        //delete produk
        $produk->delete();

        //redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Produk Berhasil Dihapus!']);
    }
}
