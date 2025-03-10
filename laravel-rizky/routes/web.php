<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;

// route::get("/", [DosenController::class, 'index'])->name('index.index');
route::get('/dosen', [ProfileController::class, 'show'])->name('dosen.dosen');
route::get("/", [HomeController::class, 'index'])->name('homepage.index');

// Route::get('/', function () {
//     return view('homepage.index');
// });

Route::get('/homepage', function(){
    return view('homepage.index');
});

Route::get('/dosen', function(){
    return view('dosen.dosen'); 
})->name('dosen_index');

Route::get('/gudang', function(){
    return view('gudang.gudang');
})->name('gudang_index');

Route::get('/karyawan', function(){
    return view('karyawan.karyawan');
})->name('karyawan_index');

Route::get('/mahasiswa', function(){
    return view('mahasiswa.mahasiswa');
})->name('mahasiswa_index');

Route::get('/maintenance', function(){
    return view('maintenance.maintenance');
});