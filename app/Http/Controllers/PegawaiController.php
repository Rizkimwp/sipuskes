<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index() {
        $this->middleware('role:admin'); 
        $pegawai= Pegawai::all(); 
        $users = User::all(); 
        return view ('layout.kelola_pegawai', compact('pegawai'));
    }
    public function kelolapegawai() {
        $this->middleware('role:admin'); 
        $pegawai = Pegawai::all(); 
        $users = User::all(); 
        return view ('layout.pegawai_register', compact('pegawai'));
    }

    public function storePegawai(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->no_tlp = $request->no_tlp;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->save();
    
        return redirect()->route('kelolapegawai')->with('success', 'Data Dokter berhasil ditambahkan.');
    }

    public function edit_pegawai(Pegawai $pegawai){  
        return view('layout.pegawai_edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->update($request->only(
        'jabatan',
        'jenis_kelamin',
        'nama',
        'email',
        'no_tlp',
        'tanggal_lahir'));
        return redirect()->route('kelolapegawai')->with('success', 'Pengguna berhasil diperbarui.');
    }
    // Delete User
public function destroy(Pegawai $pegawai)
{
    $pegawai->delete();
    return redirect()->route('kelolapegawai')->with('success', 'Data Dokter berhasil dihapus.');
}
}
