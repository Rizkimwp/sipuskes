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
        return view ('layout.pegawai', compact('pegawai'));
    }
    public function create() {
        $this->middleware('role:admin'); 
        $pegawai = Pegawai::all(); 
        $users = User::all(); 
        return view ('layout.pegawai_register', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|regex:/^[^0-9]*$/',
            'email' => 'required|email|max:255|unique:users',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required', 
            'jabatan' => 'required',
            'no_tlp' => 'required|min:10'
        ]);
      
        Pegawai::create($validatedData);
    
        return redirect()->route('pegawai.index')->with('success', 'Data Dokter berhasil ditambahkan.');
    }
        
        

    public function show() {

    }

    public function edit(Pegawai $pegawai){  
        return view('layout.pegawai_edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|',
            'email' => 'required|email|max:255|unique:users',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required', 
            'jabatan' => 'required',
          'no_tlp' => 'required|min:10|numeric'
        ]);
      
        Pegawai::where('id', $pegawai-> id) 
        ->update($validatedData);
    
        return redirect()->route('pegawai.index')->with('success', 'Data Dokter berhasil ditambahkan.');
    }
    // Delete User
public function destroy(Pegawai $pegawai)
{
    $pegawai->delete();
    return redirect()->route('pegawai.index')->with('success', 'Data Dokter berhasil dihapus.');
}
}
