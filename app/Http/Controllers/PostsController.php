<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
public function index() {
    
    return view ('layout.post.post', [
        "title"=>"Post",
        "posts"=>Post::all()
    ]);

}
public function create() {
    $categories = Category::all();
     return view ('layout.post.post_create', compact('categories'));
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'judul' => 'required|max:255',
        'slug' => 'required|unique:posts',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'category_id' => 'required',
        'body' => 'required'
    ]);
    
    // Menghapus tag HTML dari field 'body'
    // $validatedData['body'] = strip_tags($request->body);
    
    // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
    // $validatedData['body'] = htmlspecialchars($validatedData['body']);
    
    if ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
    
    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
    
    Post::create($validatedData);   
    return redirect()->route('post.index')->with('success', 'Data Post berhasil ditambahkan.');
    
}

public function show($slug) {
    $posts = Post::all();
return view ('userview.post', [
"title" => "Profile",
"posts" => Post::find($slug)
]);
}

public function edit(Post $post) {
    $categories = Category::all();
    return view('layout.post.post_edit', compact('post', 'categories'));

}


public function update(Request $request, Post $post) {
    $rules = [
        'judul' => 'required|max:255',
        'category_id' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'body' => 'required',
    ];
    
    if ($request->slug != $post->slug) {
        $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
    }
    
    // Move validation before storing the image
    $validatedData = $request->validate($rules);
    
    if ($request->file('image')) {
        // Store the image
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
    
    // Menghapus tag HTML dari field 'body'
    // $validatedData['body'] = strip_tags($validatedData['body']);
    // Menghindari interpretasi tag HTML dengan mengubah karakter khusus
    // $validatedData['body'] = htmlspecialchars($validatedData['body']);
    
    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
    
    // Ensure that you are using the correct path to the storage disk
    Post::where('id', $post->id)->update($validatedData);
    
    return redirect()->route('post.index')->with('success', 'Data Post berhasil diupdate.');
    

}

public function destroy(Post $post){
    $post->delete();
    return redirect()->route('post.index')->with('success', 'Data Post berhasil dihapus.');
}

public function checkSlug(Request $request) {

    $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    return response()->json(['slug' => $slug]);
}

}
