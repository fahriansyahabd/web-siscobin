<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ews;
use App\Models\M_ews;

class Fromcontroller extends Controller
{
    public function index()
    {
        $data = M_ews::all(); // Ambil semua data dari tabel ews
        return view('fromview', compact('data')); // Kirim data ke view
    }

    public function createews()
    {
        return view('frominput');
    }
    
        public function aksiews(Request $request)
        {
            $request->validate([
                'no_cm' => 'required|integer',
                'nama_passien' => 'required|string|max:255',
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

            // Menampilkan form edit
    public function edit($id)
    {
        $ews = M_ews::findOrFail($id);
        return view('frominput', compact('ews'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_cm' => 'required|integer',
            'nama_passien' => 'required|string|max:255',
            'ruangan' => 'required|string|max:255',
            'diagnosa' => 'required|string|max:255',
            'skrining_ews' => 'required|string|max:255',
            'keadaan' => 'required|string|max:255',
            'ket' => 'required|string',
            'skor' => 'required|integer',
        ]);

        $ews = M_ews::findOrFail($id);
        $ews->update($request->all());

        return redirect()->route('fromview')->with('success', 'Data berhasil diperbarui');
    }

    public function hapus($id)
    {
        $ews = M_ews::findOrFail($id);
        $ews->delete();

        return redirect()->route('fromview')->with('success', 'Data berhasil dihapus');
    }
}
