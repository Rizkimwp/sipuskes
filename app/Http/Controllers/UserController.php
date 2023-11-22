<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index() {
        $users = User::all(); 
        return view('layout.data.user', compact('users'));
        
    }

    public function create(){
        $users = User::all(); 
        return view('layout.data.user_register', compact('users'));
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|max:255',
            'role' => 'required',
        ]);

        // Hash the password before saving it to the database
        $validated['password'] = Hash::make($validated['password']);

        // Create a new user
        

        // You might want to redirect to a success page or perform some other action
        return redirect()->route('kelolauser')->with('success', 'Pengguna berhasil ditambah'); // Change 'login' to the name of your login route
    }



// Edit User
public function edit(User $user)
{

return view('layout.data.user_edit', compact('user'));
}
// Update User
public function update(Request $request, User $user)
{
    $rules = [
        'name' => 'required|max:255',
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('users')->ignore($user->id),
        ],
        'role' => 'required',
    ];
    
    $validatedData = $request->validate($rules);
    
    User::where('id', $user->id)->update($validatedData);
    
    return redirect()->route('user.index')->with('success', 'Pengguna berhasil diperbarui.');
}

// Delete User
public function destroy(User $user)
{
$user->delete();
return redirect()->route('user.index')->with('success', 'Pengguna berhasil dihapus.');
}

}
