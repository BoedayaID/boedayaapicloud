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
        $suku = Suku::where('id','=',$id)
        ->with('makanan')
        ->with('kesenian')
        ->with('rumah_adat')
        ->with('tempat_wisata')
        ->first();
        return $suku;
    }
    
    public function listsuku($id)
    {    
        $suku = Suku::where('provinsi_id',$id)->get();
        $data = ['suku'=>$suku];
        return $data;
    }
}
