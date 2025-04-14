<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    public function create()
    {
        return view('trainers.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Trainer::create($request->all());
        return redirect()->route('trainers.index');
    }

    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    public function update(Request $request, Trainer $trainer)
    {
        $trainer->update($request->all());
        return redirect()->route('trainers.index');
    }

    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainers.index');
    }
}