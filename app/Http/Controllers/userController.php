<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users to display on the index page
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        // Show the create user form
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validate input fields before creating a new user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        // Create a new user and store in the database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        // Redirect back to the user index page
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        // Show the edit form for a user
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate and update user information
        $user->update($request->except('password') + [
            'password' => $request->password ? Hash::make($request->password) : $user->password
        ]);

        // Redirect back to the user index page
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        // Delete the user
        $user->delete();

        // Redirect back to the user index page
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        // Find the user by ID or fail if not found
        $user = User::findOrFail($id);

        // Show the user details page
        return view('users.show', compact('user'));
    }
}
