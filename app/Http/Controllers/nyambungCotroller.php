<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class nyambungCotroller extends Controller
{
    public function index (){
        $produk = Produk::get();
        return view ('index', compact('produk'));

    }

    // public function produk_detail (){
    //     $produk = Produk::get();
    //     return view ('produk-detail', compact('produk'));

    // }

    public function shop (){
        $produk = Produk::get();
        return view ('shop', compact('produk'));

    }
    public function cekout (){
        $produk = Produk::get();
        return view ('cekout', compact('produk'));

    }

      public function show($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        return view('produk-detail', compact('produk'));
    }
}
