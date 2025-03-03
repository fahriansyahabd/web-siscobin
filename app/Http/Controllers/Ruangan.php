<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ruangan extends Controller
{
    public function V_ruagan()
    {
        return view('V_ruangan');
    }

    public function createruagan()
    {
        return view('Inp_ruangan');
    }
    //
}
