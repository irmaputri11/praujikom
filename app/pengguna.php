<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{

    protected $fillable = [
        'id_pengguna','username','email',
        'alamat','deskripsi'
    ];
     public $timestamps = true;
}
