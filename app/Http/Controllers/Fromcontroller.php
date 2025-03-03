<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ews;
use App\Models\M_ews;

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
                'no_cm' => 'required|integer',
                'nama_pasien' => 'required|string|max:255',
                'ruangan' => 'required|string|max:255',
                'diagnosa' => 'required|string|max:255',
                'skrining_ews' => 'required|string|max:255',
                'keadaan' => 'required|string|max:255',
                'ket' => 'nullable|string',
                'skor' => 'required|integer',
            ]);
            // Menyimpan data ke tabel Ews
            M_ews::create($request->all());

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
