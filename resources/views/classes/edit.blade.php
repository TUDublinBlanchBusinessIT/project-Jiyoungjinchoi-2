@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Class</h2>
    <form action="{{ route('classes.update', $class) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title:</label>
            <input type="text" name="title" value="{{ $class->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control">{{ $class->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Trainer:</label>
            <select name="trainer_id" class="form-control">
                @foreach($trainers as $trainer)
                    <option value="{{ $trainer->id }}" @if($trainer->id == $class->trainer_id) selected @endif>{{ $trainer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Start Time:</label>
            <input type="datetime-local" name="start_time" value="{{ \Carbon\Carbon::parse($class->start_time)->format('Y-m-d\TH:i') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Capacity:</label>
            <input type="number" name="capacity" value="{{ $class->capacity }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection