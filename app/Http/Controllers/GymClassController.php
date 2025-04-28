<?php

namespace App\Http\Controllers;

use App\Models\GymClass;
use App\Models\Trainer;
use Illuminate\Http\Request;

class GymClassController extends Controller
{
    public function index()
    {
        // Fetch all gym classes and eager load the trainer relationship
        $classes = GymClass::with('trainer')->get();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        // Fetch all trainers to populate the trainer dropdown in the form
        $trainers = Trainer::all();
        return view('classes.create', compact('trainers'));
    }

    public function store(Request $request)
    {
        // Validate incoming data before storing the class
        $request->validate([
            'title' => 'required',
            'trainer_id' => 'required',
            'start_time' => 'required|date',
            'capacity' => 'required|integer'
        ]);

        // Create a new gym class
        GymClass::create($request->all());

        // Redirect back to the classes index page
        return redirect()->route('classes.index');
    }

    public function edit(GymClass $class)
    {
        // Fetch all trainers to populate the trainer dropdown in the edit form
        $trainers = Trainer::all();
        return view('classes.edit', compact('class', 'trainers'));
    }

    public function update(Request $request, GymClass $class)
    {
        // Validate and update the class data
        $class->update($request->all());

        // Redirect back to the classes index page
        return redirect()->route('classes.index');
    }

    public function destroy(GymClass $class)
    {
        // Delete the gym class
        $class->delete();

        // Redirect back to the classes index page
        return redirect()->route('classes.index');
    }

    public function show($id)
    {
        // Find the class by ID and eager load the trainer relationship
        $class = GymClass::with('trainer')->findOrFail($id);

        // Return the show view for this specific class
        return view('classes.show', compact('class'));
    }
}
