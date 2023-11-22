<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $pages = Page::all(); 
        return view ('layout.post.page', compact('pages'));
    }

    public function show (Page $page) {
        
        $request = $page -> id;
        if ( $request = Page::find(1)) {
            return view ('layout.post.galery');
        }

    }
}
