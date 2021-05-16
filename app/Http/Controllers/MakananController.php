<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
class MakananController extends Controller
{
    //
    public function index()
    {
        $makanan = Makanan::all();
        $data = ['makanan'=>$makanan];
        return $data;
    }

    public function detail($id)
    {
        $makanan = Makanan::find($id);
        return $makanan;
    }
}
