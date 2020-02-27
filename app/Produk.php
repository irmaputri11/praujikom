<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'kd_produk','nama_produk','slug','id_jenis_produk',
        'stok','harga','deskripsi','foto'
    ];
     public $timestamps = true;

     public function jenis_produk()
     {
         return $this->belongsTo('App\jenis_produk','id_jenis_produk');
     }
     public function getRouteKeyName()
     {
        return 'slug';
     }
}
