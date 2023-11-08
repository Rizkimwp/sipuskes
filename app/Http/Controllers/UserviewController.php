<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class UserviewController extends Controller
{
    public function homeIndex () {
        $posts = Post::where('category_id', 1)->get();
        $postProfile = Post::where('category_id', 2)->get();

   
        return view('userview.home', compact('posts', 'postProfile'));
    

    
    }
}
