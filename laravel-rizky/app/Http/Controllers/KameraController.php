<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamera;

class KameraController extends Controller
{
    //

    
    public function index(){
        $kameraku = Kamera::all();
        return view('kamera.index', compact('kameraku'));
        //, compact('kamera')
    }
}
