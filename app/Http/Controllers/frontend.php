<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class frontend extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }

    public function produk_detail (){
        $produk = Produk::get();
        return view ('produk-detail', compact('produk'));

    }

    public function show($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        return view('produk-detail', compact('produk'));
    }

    public function admin()
    {
        return view('admin');
    }

    public function contact()
    {
        return view('contact');
    }
    public function cekout()
    {
        return view('cekout');
    }

    public function card()
    {
        return view('card');
    }

    // public function produk_detail()
    // {
    //     $produk = Produk::orderBy('created_at','DESC');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
