<?php

namespace App\Http\Controllers;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index() {
        $diagnosas = Diagnosa::all();
        return view ('layout.diagnosa', compact('diagnosas'));
    }
    public function create() {
        $this->middleware('role:admin'); 
        $diagnosas = Diagnosa::all(); 
        return view ('layout.diagnosa_register', compact('diagnosas'));

    }
    public function store(Request $request)
    { 
        
        $validatedData = $request ->validate([
        'nama' => 'required|max:255|string',
        'deskripsi' => 'required', ]);

        Diagnosa::create($validatedData);
    
        return redirect()->route('diagnosa.index')->with('success', 'Data Diagnosa berhasil ditambahkan.');
    }

    public function show() {

    }

    public function edit(Diagnosa $diagnosa){  
        return view('layout.diagnosa_edit', compact('diagnosa'));
    }

    public function update(Request $request, Diagnosa $diagnosa)
    {
        $validatedData = $request ->validate([
            'nama' => 'required|max:255|string',
            'deskripsi' => 'required', ]);

            Diagnosa::where('id', $diagnosa -> id) 
            ->update($validatedData);
        return redirect()->route('diagnosa.index')->with('Diagnosa berhasil diperbarui.');
    }
    public function destroy(Diagnosa $diagnosa)
{
    $diagnosa->delete();
    return redirect()->route('diagnosa.index')->with('success', 'Data Diagnosa berhasil dihapus.');
}

}
