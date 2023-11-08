<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index() {
        $categori = Category::find(5);
        $posts = $categori->post;

    return view('layout.galery', compact('posts'));
}
}
