<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
class ProvinceController extends Controller
{
    //
    public function index()
    {
        $provinces = Province::all();
        $data = ['provinces'=>$provinces];
        return $data;
    }

    public function detail($id)
    {
        $provinces = Province::find($id);
        return $provinces;
    }
}
