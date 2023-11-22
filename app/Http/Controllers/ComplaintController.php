<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Reply;

class ComplaintController extends Controller
{
    public function index() {
        $complaints = Complaint::all();
         return view('layout.post.tanyadokter', compact('complaints'));
 }

 public function create() {
    $complaint = Complaint::all();
         return view ('layout.post.tanyadokter_create', compact('complaint'));
    }

    public function update(Request $request, Complaint $complaint) {
        $validatedData = $request->validate([
            'reply' => 'required|string|max:255'
        ]);
        
        // Tambahkan balasan baru ke komplain yang sesuai
        $reply = new Reply([
            'reply' => $validatedData['reply'],
            'complaint_id' => $complaint->id,
            'user_id' => auth()->user()->id,
        ]);
    
        $reply->save();   
        return redirect()->route('complaint.edit', ['complaint' => $complaint->id])->with('success', 'Berhasil membalas pesan');

    }
    
    
    public function edit(Complaint $complaint) {
       
       return view ('layout.post.tanyadokter_create', compact('complaint'));
    
    }

    public function store(Request $request, Complaint $complaint) {
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
        Complaint::where('id', $complaint->id)->update($validatedData);
        
        return redirect()->route('complaint.index')->with('success', 'Data Post berhasil diupdate.');
        
        
    
    
    }
}
