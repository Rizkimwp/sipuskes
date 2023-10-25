<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\User;

class DokterController extends Controller
{
    public function index() {
        $this->middleware('role:admin'); 
        $dokters = Dokter::all(); 
        $users = User::all(); 
        return view ('layout.kelola_dokter', compact('dokters', 'users'));
    }

    public function keloladokter() {
        $this->middleware('role:admin'); 
        $dokters = Dokter::all(); 
        $users = User::all(); 
        return view ('layout.dokter_register', compact('dokters', 'users'));
    }

    public function storeDokter(Request $request)
    {
        $dokter = new Dokter;
        $dokter->spesialisasi = $request->spesialisasi;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->id_dokter = $request->id_dokter;
        $dokter->nama = $request->nama;
        $dokter->email = $request->email;
        $dokter->no_tlp = $request->no_tlp;
        $dokter->tanggal_lahir = $request->tanggal_lahir;
    
        $dokter->save();
    
        return redirect()->route('keloladokter')->with('success', 'Data Dokter berhasil ditambahkan.');
    }
//  View Edit Dokter
    public function edit_dokter(Dokter $dokter){  
        return view('layout.dokter_edit', compact('dokter'));
    }
// Submit Update

    public function update(Request $request, Dokter $dokter)
    {
        $dokter->update($request->only('spesialisasi',
        'jenis_kelamin',
        'id_dokter',
        'nama',
        'email',
        'no_tlp',
        'tanggal_lahir'));
        return redirect()->route('keloladokter')->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Delete User
public function destroy(Dokter $dokter)
{
    $dokter->delete();
    return redirect()->route('keloladokter')->with('success', 'Data Dokter berhasil dihapus.');
}
}
