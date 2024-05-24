<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('user.categories', [
            "title" => "Categories",
            "categories" => Category::all()
        ]);
    }
}
