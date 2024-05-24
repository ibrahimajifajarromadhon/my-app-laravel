<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register', [
            "title" => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nama_toko' => 'required|min:3|max:255|unique:shops',
            'email' => 'required|email:dns|unique:shops',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Shop::create($validatedData);

        return redirect("/login")->with('success', 'Registrasi berhasil!! Silahkan login');
    }
}
