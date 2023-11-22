<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        $homes = Home::all();
    return view('layout.post.home', compact('homes'));
 }

 public function create() {
 
         return view ('layout.post.home_create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required'
        ]);
        
        // Menghapus tag HTML dari field 'body'
        $validatedData['body'] = strip_tags($request->body);
        
        // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
        $validatedData['body'] = htmlspecialchars($validatedData['body']);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Home::create($validatedData);   
        return redirect()->route('home.index')->with('success', 'Data Post berhasil ditambahkan.');
        
    }
    
    public function edit(Home $home) {
       return view ('layout.post.home_edit', compact('home'));
    
    }

    public function update(Request $request, Home $home) {
        $rules = [
            'judul' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required',
        ];
        
      
        // Move validation before storing the image
        $validatedData = $request->validate($rules);
        
        if ($request->file('image')) {
            // Store the image
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        // Menghapus tag HTML dari field 'body'
        $validatedData['body'] = strip_tags($validatedData['body']);
        // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
        $validatedData['body'] = htmlspecialchars($validatedData['body']);
        
        $validatedData['user_id'] = auth()->user()->id;
       
        
        // Ensure that you are using the correct path to the storage disk
        Home::where('id', $home->id)->update($validatedData);
        
        return redirect()->route('home.index')->with('success', 'Data Post berhasil diupdate.');
        
        
    
    
    }
 }


