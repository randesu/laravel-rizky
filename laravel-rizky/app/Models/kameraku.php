<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kameraku extends Model
{
    //
    // use HasFactory;
    protected $table = 'kamera';
    protected $fillable = [
        'kamera',
        'tipe_kamera',
        'deskripsi',
        'harga_jual',
        'foto'
    ];
}
