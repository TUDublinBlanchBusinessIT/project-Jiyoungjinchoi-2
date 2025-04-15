<?php

namespace App\Http\Controllers;

use App\Models\GymClass;
use App\Models\Trainer;
use Illuminate\Http\Request;

class GymClassController extends Controller
{
    public function index()
    {
        $classes = GymClass::with('trainer')->get();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        $trainers = Trainer::all();
        return view('classes.create', compact('trainers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'trainer_id' => 'required',
            'start_time' => 'required|date',
            'capacity' => 'required|integer'
        ]);

        GymClass::create($request->all());
        return redirect()->route('classes.index');
    }

    public function edit(GymClass $class)
    {
        $trainers = Trainer::all();
        return view('classes.edit', compact('class', 'trainers'));
    }

    public function update(Request $request, GymClass $class)
    {
        $class->update($request->all());
        return redirect()->route('classes.index');
    }

    public function destroy(GymClass $class)
    {
        $class->delete();
        return redirect()->route('classes.index');
    }
}