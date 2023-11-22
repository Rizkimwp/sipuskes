<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index() {
        $jadwaldokter = JadwalDokter::all();
        return view ('layout.data.jadwal', compact('jadwaldokter'));
    }
    public function create() {
        $jadwaldokter = JadwalDokter::all(); 
        $dokters = Dokter::all();
        return view ('layout.data.jadwal_register', compact('jadwaldokter', 'dokters'));
    }
    public function store(Request $request)
    {

        $jamPraktekStart = $request->input('jam_praktek_start');
        $jamPraktekEnd = $request->input('jam_praktek_end');
        $jamPraktek = $jamPraktekStart . ' - ' . $jamPraktekEnd;

        $jadwalDokter = new JadwalDokter;
        $jadwalDokter->hari_praktek = $request->input('hari_praktek'); 
        $jadwalDokter->jam_praktek = $jamPraktek;
        $jadwalDokter->dokter_id = $request->input('dokter_id'); 
        $jadwalDokter->save();
    
        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Praktek Dokter berhasil ditambahkan.');
    }

    public function show() {

    }

    public function edit(JadwalDokter $jadwaldokter){  
        $dokters = Dokter::all();
        return view('layout.data.jadwal_edit', compact('jadwaldokter', 'dokters'));
    }

    public function update(Request $request, JadwalDokter $jadwaldokter)
    {
        $jadwaldokter->update($request->only(
            'hari_praktek',
             'jam_praktek0', 
             'dokter_id'
        ));
        return redirect()->route('jadwal.index')->with('Jadwal Praktek berhasil diperbarui.');
    }
    public function destroy(JadwalDokter $jadwaldokter)
{
    $jadwaldokter->delete();
    return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Praktek berhasil dihapus.');
}
}