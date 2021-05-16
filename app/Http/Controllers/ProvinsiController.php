<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
class ProvinsiController extends Controller
{
    //
    public function index()
    {
        $provinsi = Province::all();
        $data = ['provinsi'=>$provinsi];
        return $data;
    }

    public function detail($id)
    {
        $provinsi = Provinsi::find($id);
        return $provinsi;
    }
}