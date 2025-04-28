@extends('layouts.app')

@section('title', 'Classes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-4 fw-bold display-5">All Classes</h1>
    <a href="{{ route('classes.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Class
    </a>
</div>

<!-- Table displaying classes -->
<table class="table table-responsive">
    <thead>
        <tr>
            <th style="min-width: 200px; width: 25%;">Name</th> <!-- Adjust column size -->
            <th style="min-width: 300px; width: 40%;">Description</th> <!-- Adjust column size -->
            <th style="min-width: 150px; width: 20%;">Trainer</th>
            <th style="min-width: 200px; width: 15%;">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($classes as $class)
    <tr>
        <td>{{ $class->title }}</td> <!-- Update from $class->name to $class->title -->
        <td>{{ $class->description }}</td>
        <td>{{ $class->trainer->name ?? 'No Trainer Assigned' }}</td>
        <td>
            <a href="{{ route('classes.show', $class->id) }}" class="btn btn-success btn-sm">Show</a>
            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this class?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

    </tbody>
</table>
@endsection
