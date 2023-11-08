<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    public function dashboard(){
        $this->middleware('role:admin');
        $users = User::all(); 
        return view ('layout.dashboard', compact('users'));
    }
    
}
