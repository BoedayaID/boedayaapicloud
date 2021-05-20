<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
class ProvinsiController extends Controller
{
    //
    public function index()
    {
        $provinsi = Provinsi::all();
        $data = ['provinsi'=>$provinsi];
        return $data;
    }

    public function detail($id)
    {
        $provinsi = Provinsi::find($id);
        return $provinsi;
    }

    public function listprovinsi($id)
    {    
        
        $provinsi = Provinsi::where('pulau_id','like','%'.$id.'%')->get();
        $data = ['provinsi'=>$provinsi]
        return $data;
    }
}
