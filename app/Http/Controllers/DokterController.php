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
        return view ('layout.dokter', compact('dokters', 'users'));
    }

    public function create() {
        $this->middleware('role:admin'); 
        $dokters = Dokter::all(); 
        $users = User::all(); 
        return view ('layout.dokter_register', compact('dokters', 'users'));
    }

    public function store(Request $request)
    {
       
        $validatedData = $request ->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required', 
            'spesialisasi' => 'required',
            'no_tlp' => 'required|min:10|numeric'
        ]);
      
        Dokter::create($validatedData);
    
        return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil ditambahkan.');
    }

    public function show() {

    }
//  View Edit Dokter
    public function edit(Dokter $dokter){  
        return view('layout.dokter_edit', compact('dokter'));
    }
// Submit Update

    public function update(Request $request, Dokter $dokter)
    {
            
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|string',
            'email' => 'required|email|max:255|unique:users',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required', 
            'spesialisasi' => 'required',
            'no_tlp' => 'required|min:10|numeric'
        ]);
      
        Dokter::where('id', $dokter -> id) 
    ->update($validatedData);
    
        return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil diperbarui.');
       
    }

    // Delete User
public function destroy(Dokter $dokter)
{
    $dokter->delete();
    return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil dihapus.');
}
}
