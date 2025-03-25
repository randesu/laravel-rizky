<?php
 
namespace App\Models;
namespace App\Http\Controllers;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Kamera extends Model
{
    use HasFactory;
    protected $fillable = [
        'kamera',
        'tipe_kamera',
        'deskripsi',
        'harga_jual',
        'foto'
    ];
}