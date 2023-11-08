<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class ProfileController extends Controller
{
    public function index() {
        $categori = Category::find(2);
        $posts = $categori->post;

    return view('layout.profile', compact('posts'));

    }
    public function create() {

    }
    
    public function show($slug) {
        $posts = Post::all();
        return view ('userview.profile', [
        "title" => "Profile",
        "posts" => Post::find($slug)
        ]);
    }
    
}
