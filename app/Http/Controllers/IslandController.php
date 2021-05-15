<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Island;
class IslandController extends Controller
{
    //
    public function index()
    {
        $islands = Island::all();
        $data = ['islands'=>$islands];
        return $data;
    }

    public function detail($id)
    {
        $islands = Island::find($id);
        return $islands;
    }
}
