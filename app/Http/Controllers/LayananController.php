<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index() {
        $categori = Category::find(3);
        $posts = $categori->post;

    return view('layout.layanan', compact('posts'));
 }
}
