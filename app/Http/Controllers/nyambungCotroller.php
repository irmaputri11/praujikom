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

    public function shop (){
        $produk = Produk::get();
        return view ('shop', compact('produk'));
        
    }
}
