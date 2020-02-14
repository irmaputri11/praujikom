<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis_produk;
use Session;

class jenis_produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $js = jenis_produk::all();
        // return view('backend.jenis_produk.index', compact('jenis_produk'));
        return view('backend.jenis_produk.index',compact('js'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $js = jenis_produk::all();
        // dd($tag);
        return view('backend.jenis_produk.create', compact('js'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $js = new jenis_produk();
        $js->nama_jenis_produk = $request->nama_jenis_produk;
        $js->save();
        return redirect()->route('jenis_produk.index'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $js = jenis_produk::findOrfail($id);
        return view('backend.jenis_produk.edit',compact('js'));
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
        $js = jenis_produk::findOrfail($id);
        if(!jenis_produk::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $js->nama_jenis_produk."</b>"
        ]);
        return redirect()->route('jenis_produk.index');

    }
}
