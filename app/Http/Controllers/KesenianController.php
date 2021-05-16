<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kesenian;
class KesenianController extends Controller
{
    //
    public function index()
    {
        $kesenian = Kesenian::all();
        $data = ['kesenian'=>$kesenian];
        return $data;
    }

    public function detail($id)
    {
        $kesenian = Kesenian::find($id);
        return $kesenian;
    }
}
