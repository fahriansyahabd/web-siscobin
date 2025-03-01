<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fromcontroller extends Controller
{
    public function index()
    {
        return view('fromview');
    }
    public function input()
    {
        return view('frominput');
    }
}
