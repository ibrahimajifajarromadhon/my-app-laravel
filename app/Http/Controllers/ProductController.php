<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('user.product', [
            "title" => "All Product",
            "products" => Product::latest()->filter(request(['search', 'category', 'shop']))->paginate(6)->withQueryString(),
            "categories" => Category::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('user.detail-product', [
            "title" => "Detail Product",
            "product" => $product
        ]);
    }

}
