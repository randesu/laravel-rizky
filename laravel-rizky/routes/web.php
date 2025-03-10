<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

route::get("/", [DosenController::class, 'index'])->name('index.index');
Route::get('/dosen', [ProfileController::class, 'show'])->name('dosen.dosen');

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/homepage', function(){
    return view('homepage.index');
});

Route::get('/dosen', function(){
    return view('dosen.dosen');
});

Route::get('/gudang', function(){
    return view('gudang.gudang');
});

Route::get('/karyawan', function(){
    return view('karyawan.karyawan');
});

Route::get('/mahasiswa', function(){
    return view('mahasiswa.mahasiswa');
});

Route::get('/maintenance', function(){
    return view('maintenance.maintenance');
});