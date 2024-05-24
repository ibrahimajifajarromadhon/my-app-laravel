<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard.products.index', [
            "title" => "My Products",
            "products" => Product::where('shop_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.dashboard.products.create', [
            "title" => "My Products",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required|max:255",
            "slug" => "required|unique:products",
            "category_id" => "required",
            "harga" => "required|numeric",
            "deskripsi" => "required",
            "gambar" => "required|image|mimes:jpeg,jpg,png|max:2048"
        ]);

        $validatedData['shop_id'] = auth()->user()->id;
        $validatedData['gambar'] = $request->file('gambar');
        $validatedData['gambar']->storeAs('public/products', $validatedData['gambar']->hashName());
        $validatedData['gambar'] = $validatedData['gambar']->hashName();

        Product::create($validatedData);

        return redirect('/dashboard/products')->with(['success' => 'Data Produk Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('user.dashboard.products.show', [
            "title" => "My Products",
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('user.dashboard.products.edit', [
            "title" => "My Products",
            "product" => $product,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            "nama" => "required|max:255",
            "category_id" => "required",
            "harga" => "required|numeric",
            "deskripsi" => "required",
            "gambar" => "image|mimes:jpeg,jpg,png|max:2048"
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = "required|unique:products";
        }

        $validatedData = $request->validate($rules);

        $validatedData['shop_id'] = auth()->user()->id;

        if ($request->hasFile('gambar')) {

            $validatedData['gambar'] = $request->file('gambar');
            $validatedData['gambar']->storeAs('public/products', $validatedData['gambar']->hashName());
            $validatedData['gambar'] = $validatedData['gambar']->hashName();

            Storage::delete('public/products/' . $product->gambar);

            Product::where('id', $product->id)
                ->update($validatedData);
        } else {
            Product::where('id', $product->id)
                ->update($validatedData);
        }

        return redirect('/dashboard/products')->with(['success' => 'Data Produk Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/dashboard/products')->with(['success' => 'Data Produk Berhasil Dihapus!']);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
