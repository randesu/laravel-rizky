<?php

namespace App\Http\Controllers;

use App\Models\kameraku;
use Illuminate\Http\Request;


class KameraController extends Controller
{
    //

    
    public function index(){
        $kameraku = kameraku::get()->all();
        // $kameraku = Kamera::all();
        return view('kamera.index', compact('kameraku'));
        //, compact('kamera')
    }
}
