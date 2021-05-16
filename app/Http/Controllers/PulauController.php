<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pulau;
class PulauController extends Controller
{
    //
    public function index()
    {
        $pulau = Pulau::all();
        $data = ['pulau'=>$pulau];
        return $data;
    }

    public function detail($id)
    {
        $pulau = Pulau::find($id);
        return $pulau;
    }
}
