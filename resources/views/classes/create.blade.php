@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Class</h2>
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Trainer:</label>
            <select name="trainer_id" class="form-control">
                @foreach($trainers as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Start Time:</label>
            <input type="datetime-local" name="start_time" class="form-control">
        </div>

        <div class="mb-3">
            <label>Capacity:</label>
            <input type="number" name="capacity" class="form-control">
        </div>

        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection