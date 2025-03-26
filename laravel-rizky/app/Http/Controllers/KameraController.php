<?php

namespace App\Http\Controllers;

use App\Models\kameraku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KameraController extends Controller
{
    //

    
    public function index(){
        $kameraku = kameraku::get()->all();
        // $kameraku = Kamera::all();
        return view('kamera.index', compact('kameraku'));
        //, compact('kamera')
    }

    public function create()
{
    //
    return view('kamera.create');
}

public function store(Request $request)
{
    // melakukan validasi data
    $request->validate([
        'kamera' => 'required|max:45',
        'tipe_kamera' => 'required|max:45',
        'harga_jual' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ],
    [
        'kamera.required' => 'Nama wajib diisi',
        'kamera.max' => 'Nama maksimal 45 karakter',
        'tipe_kamera.required' => 'jenis wajib diisi',
        'tipe_kamera.max' => 'jenis maksimal 45 karakter',
        'foto.max' => 'Foto maksimal 2 MB',
        'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
        'foto.image' => 'File harus berbentuk image'
    ]);
    
    //jika file foto ada yang terupload
    if(!empty($request->foto)){
        //maka proses berikut yang dijalankan
        $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
        //setelah tau fotonya sudah masuk maka tempatkan ke public
        $request->foto->move(public_path('image'), $fileName);
    } else {
        $fileName = 'nophoto.jpg';
    }
    
    //tambah data produk
    DB::table('kamera')->insert([
        'kamera'=>$request->kamera,
        'tipe_kamera'=>$request->tipe_kamera,
        'harga_jual'=>$request->harga_jual,
        'deskripsi' => $request->deskripsi,
        'foto'=>$fileName,
    ]);
    
    return redirect()->route('kamera.index');
}

    public function edit(kameraku $id)
    {
        //
        return view('kamera.edit', compact('id'));
    }



    public function update(Request $request, string $id)
{
    // validasi data
    $request->validate([
        'kamera' => 'required|max:45',
        'tipe_kamera' => 'required|max:45',
        'harga_jual' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
    ],
    [
        'kamera.required' => 'Nama wajib diisi',
        'kamera.max' => 'Nama maksimal 45 karakter',
        'tipe_kamera.required' => 'jenis wajib diisi',
        'tipe_kamera.max' => 'jenis maksimal 45 karakter',
        'foto.max' => 'Foto maksimal 2 MB',
        'foto.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
        'foto.image' => 'File harus berbentuk image'
    ]);
 
 
    //foto lama
    $fotoLama = DB::table('kamera')->select('foto')->where('id',$id)->get();
    foreach($fotoLama as $f1){
        $fotoLama = $f1->foto;
    }
 
    //jika foto sudah ada yang terupload
    if(!empty($request->foto)){
        //maka proses selanjutnya
        if(!empty($fotoLama->foto)) unlink(public_path('image'.$fotoLama->foto));
        //proses ganti foto
        $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
        //setelah tau fotonya sudah masuk maka tempatkan ke public
        $request->foto->move(public_path('image'), $fileName);
    } else{
        $fileName = $fotoLama;
    }
 
    //update data produk
    DB::table('kamera')->where('id',$id)->update([
        'kamera'=>$request->kamera,
        'tipe_kamera'=>$request->tipe_kamera,
        'harga_jual'=>$request->harga_jual,
        'deskripsi' => $request->deskripsi,
        'foto'=>$fileName,
    ]);
            
    return redirect()->route('kamera.index');
}

    public function destroy(kameraku $id)
    {
        $id->delete();
        
        return redirect()->route('kamera.index')
                ->with('success','Data berhasil di hapus' );
    }



}
