<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categori = Category::find(1);
        $posts = $categori->post;

    return view('layout.home', compact('posts'));
 }

 
}
