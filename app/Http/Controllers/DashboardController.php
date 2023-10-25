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
    
// Kelola User
    public function kelolauser() {
        $this->middleware('role:admin'); 
        $users = User::all(); 
        return view ('layout.kelola_user', compact('users')); 


    }
    
    // Edit User
    public function edit_user(User $user)
{
 
    return view('layout.user_edit', compact('user'));
}
// Update User
public function update(Request $request, User $user)
{
    $user->update($request->only('name', 'email', 'role'));
    return redirect()->route('kelolauser')->with('success', 'Pengguna berhasil diperbarui.');
}

// Delete User
public function destroy(User $user)
{
    $user->delete();
    return redirect()->route('kelolauser')->with('success', 'Pengguna berhasil dihapus.');
}

}
