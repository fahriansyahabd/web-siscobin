<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ews;

class Fromcontroller extends Controller
{
    public function index()
    {
        return view('fromview');
    }

    public function createews()
    {
        return view('frominput');
    }
    
        public function aksiews(Request $request)
        {
            $request->validate([
                'no_cm' => 'required|string',
                'nama_passien' => 'required|string',
                'ruangn' => 'required|string',
                'diagnosa' => 'required|string',
                'skrining_ews' => 'required|string',
                'keadaan' => 'required|string',
                'ket' => 'nullable|string',
            ]);
    
            // Menyimpan data ke tabel Ews
            Ews::create($request->all());
    
            // Redirect atau kembalikan ke halaman yang diinginkan
            return redirect()->route('ews.view')->with('success', 'Data berhasil disimpan!');
            
        }
    
    public function V_ruagan()
    {
        return view('V_ruangan');
    }

    public function ruagan()
    {
        return view('Inp_ruangan');
    }
}
