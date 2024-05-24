<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\RedirectResponse;

use Illuminate\View\View;

class Homepage extends Controller
{

    public function index(): View
    {
        $produks = Produk::latest()->simplePaginate(6);

        return view('homepage.index', compact('produks'));
    }
}
