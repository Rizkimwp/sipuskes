<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::all();
       
    return view('layout.post.profile', compact('profiles'));

    }
    public function create() {
 
        return view ('layout.post.profile_create');
   }

   public function store(Request $request) {
       $validatedData = $request->validate([
           'judul' => 'required|max:255',
           'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
           'body' => 'required'
       ]);
       
       // Menghapus tag HTML dari field 'body'
    //    $validatedData['body'] = strip_tags($request->body);
       
       // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
       $validatedData['body'] = htmlspecialchars($validatedData['body']);
       
       if ($request->file('image')) {
           $validatedData['image'] = $request->file('image')->store('post-images');
       }
       
       $validatedData['user_id'] = auth()->user()->id;
       
       Profile::create($validatedData);   
       return redirect()->route('profile.index')->with('success', 'Data Post berhasil ditambahkan.');
       
   }
   
   public function edit(Profile $profile) {
      return view ('layout.post.profile_edit', compact('profile'));
   
   }

   public function update(Request $request, Profile $profile) {
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
    //    $validatedData['body'] = strip_tags($validatedData['body']);
    //    // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
    //    $validatedData['body'] = htmlspecialchars($validatedData['body']);
       
       $validatedData['user_id'] = auth()->user()->id;
      
       
       // Ensure that you are using the correct path to the storage disk
       Profile::where('id', $profile->id)->update($validatedData);
       
       return redirect()->route('profile.index')->with('success', 'Data Profile berhasil diupdate.');
       
       
   
   
   }
    
}
