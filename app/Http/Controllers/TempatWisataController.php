<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatWisata;
class TempatWisataController extends Controller
{
    //
    public function index()
    {
        $tempat_wisata = TempatWisata::all();
        $data = ['tempat_wisata'=>$tempat_wisata];
        return $data;
    }

    public function detail($id)
    {
        $tempat_wisata = TempatWisata::find($id);
        return $tempat_wisata;
    }
}
