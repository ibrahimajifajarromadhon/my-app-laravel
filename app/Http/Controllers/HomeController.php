<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            "title" => "Home",
            "products" => Product::latest()->filter(request(['search', 'category', 'shop']))->paginate(6)->withQueryString()
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
