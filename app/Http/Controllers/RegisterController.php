<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        $users = User::all(); 
        return view('layout.user_register', compact('users'));
        
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|max:255', // Changed "min3" to "min:3"
            'role' => 'required',
        ]);

        // Hash the password before saving it to the database
        $validated['password'] = Hash::make($validated['password']);

        // Create a new user
        User::create($validated);

        // You might want to redirect to a success page or perform some other action
        return redirect()->route('kelolauser')->with('success', 'Pengguna berhasil ditambah'); // Change 'login' to the name of your login route
    }
}
