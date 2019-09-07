<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompradorController extends Controller
{
    //

    public function index()
    {
      return view('compradores.index');
    }
}
