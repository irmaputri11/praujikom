<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Produk;
use File;
use Session;
class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = Produk::all();
        if (
            $request->ajax()
        ) {
            $response = [
                'success' => true,
                'data' =>  $produk,
                'message' => 'Berhasil ditampilkan.'
            ];
            return response()->json($response, 200);
        }
        return view('backend.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $produk = Produk::all();
        return view('backend.produk.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->kd_produk = $request->kd_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/produk';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $produk->foto = $filename;
        }
        $produk->save();
        return redirect()->route('produk.index');
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $produk->judul."</b>"
        ]);
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
         $produk = Produk::findOrfail($id);
        if(!produk::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $produk->nama_produk."</b>"
        ]);
        return redirect()->route('produk.index');
    }
}
