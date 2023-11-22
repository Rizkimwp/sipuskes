<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paramedis;


class ParamedisController extends Controller
{
    public function index() {
        $this->middleware('role:admin'); 
        $paramedis = Paramedis::all(); 
        return view ('layout.data.paramedis', compact('paramedis'));
    }

    public function create() {
        $this->middleware('role:admin'); 
        $paramedis = Paramedis::all(); 
        return view ('layout.data.paramedis_register', compact('paramedis'));
    }

    public function store(Request $request)
    {
            
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|string',
            'email' => 'required|email|max:255|',
            'alamat' => 'required|max:255|string',
            'tanggal_lahir' => 'required', 
            'spesialisasi' => 'required',
            'no_tlp' => 'required|min:10|numeric'
        ]);
       

        Paramedis::create($validatedData);
    
        return redirect()->route('paramedis.index')->with('success', 'Data Paramedis berhasil ditambahkan.');
    }

    public function show() {

    }
//  View Edit Paramedis
    public function edit(Paramedis $paramedi){  
     
        return view('layout.data.paramedis_edit', compact('paramedi'));
    }
// Submit Update

    public function update(Request $request, Paramedis $paramedis)
    {
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'alamat' => 'required|max:255',
            'tanggal_lahir' => 'required', 
            'spesialisasi' => 'required',
            'no_tlp' => 'required|min:10|numeric'
        ]);

        Paramedis::where('id', $paramedis-> id) 
        ->update($validatedData);
    
        return redirect()->route('paramedis.index')->with('success', 'Paramedis berhasil diperbarui.');
    }

    // Delete User
public function destroy(Paramedis $paramedis)
{
    $paramedis->delete();
    return redirect()->route('paramedis.index')->with('success', 'Data Paramedis berhasil dihapus.');
}
}
