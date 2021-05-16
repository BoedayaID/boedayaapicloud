<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suku;
class SukuController extends Controller
{
    //
    public function index()
    {
        $suku = Suku::all();
        $data = ['suku'=>$suku];
        return $data;
    }

    public function detail($id)
    {
        $suku = Suku::find($id);
        return $suku;
    }
}