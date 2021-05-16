<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RumahAdat;
class RumahAdatController extends Controller
{
    //
    public function index()
    {
        $rumah_adat = RumahAdat::all();
        $data = ['rumah_adat'=>$rumah_adat];
        return $data;
    }

    public function detail($id)
    {
        $rumah_adat = RumahAdat::find($id);
        return $rumah_adat;
    }
}
