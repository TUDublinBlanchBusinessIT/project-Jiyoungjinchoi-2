<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::with('user')->get();
        return view('memberships.index', compact('memberships'));
    }

    public function create()
    {
        $users = User::all();
        return view('memberships.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        Membership::create($request->all());
        return redirect()->route('memberships.index');
    }

    public function edit(Membership $membership)
    {
        return view('memberships.edit', compact('membership'));
    }

    public function update(Request $request, Membership $membership)
    {
        $membership->update($request->all());
        return redirect()->route('memberships.index');
    }

    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('memberships.index');
    }
    public function show($id)
    {
        $membership = Membership::with('user')->findOrFail($id); // Assuming Membership has a 'user' relationship
        return view('memberships.show', compact('membership'));
    }
}