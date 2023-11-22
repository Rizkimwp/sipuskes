<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Post;
use App\Models\Home;
use App\Models\Profile;
use App\Models\Layanan;
use App\Models\Kontak;
use Illuminate\Http\Request;

class UserviewController extends Controller
{
    public function homeIndex () {
        $homes = Home::where('id', 1)->get();
       $homeProfile = Home::where('id', '>', 1)->get();
        return view('userview.home', compact('homes', 'homeProfile'));
    

    
    }

    public function profileindex() {
        $profiles = Profile::where('id', 1)->get();
        $profilekepala = Profile::where('id', 2)->get();
        $profilepuskesmas = Profile::where('id', 3)->get();
        $visimisi = Profile::where('id', 4)->get();
        
        return view ('userview.profile', compact('profiles', 'profilekepala', 'profilepuskesmas', 'visimisi'));
    }

    public function layananindex() {
        $layanans = Layanan::where('id', 2)->get();
        return view ('userview.layanan', compact('layanans'));
    }

    public function artikelindex() {
        $posts = Post::all(); 
        return view ('userview.artikel', compact('posts'));
    }

    public function kontakindex() {
        $kontaks = Kontak::all(); 
        return view ('userview.kontak', compact('kontaks'));
    }

    public function tanyadokterindex() {
   $complaints = Complaint::all();
        return view ('userview.tanyadokter', compact('complaints'));
    }
    public function tanyadokterstore(Request $request) {
        $validatedData = $request ->validate([
            'email' => 'required|email|max:255|',
            'nama' => 'required|max:255|string',
            'body' => 'required', 
        ]);

        $validatedData['body'] = htmlspecialchars($validatedData['body']);
        
        Complaint::create($validatedData);   
    return redirect()->route('tanyadokter')->with('success', 'Keluhan Berhasil Di Kirim, Tunggu Respon Dokter');

    }
}