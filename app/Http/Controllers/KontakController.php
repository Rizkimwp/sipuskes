<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index() {
        $categori = Category::find(4);
        $posts = $categori->post;

    return view('layout.kontak', compact('posts'));

    }
}
