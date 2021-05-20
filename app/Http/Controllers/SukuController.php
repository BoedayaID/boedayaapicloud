<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suku;
use DB;
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
        
        $suku = DB::table('suku')
        ->join('kesenian','suku.id','=','kesenian.suku_id')
        ->where('provinsi_id',$id)->get();
        return $suku;
    }
    
    public function listsuku($id)
    {    
        $suku = Suku::where('provinsi_id',$id)->get();
        $data = ['suku'=>$suku];
        return $data;
    }
}
