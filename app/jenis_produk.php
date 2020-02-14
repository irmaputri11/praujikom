<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_produk extends Model
{
    protected $fillable = [
        'nama_jenis_produk'
    ];
     public $timestamps = true;

     public function produk()
     {
         return $this->hasMany('App\produk','id');
     }
}
