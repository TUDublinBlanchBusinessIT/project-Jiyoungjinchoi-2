@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Fitness Classes</h2>
    <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>Title</th><th>Trainer</th><th>Time</th><th>Capacity</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
                <tr>
                    <td>{{ $class->title }}</td>
                    <td>{{ $class->trainer->name }}</td>
                    <td>{{ $class->start_time }}</td>
                    <td>{{ $class->capacity }}</td>
                    <td>
                        <a href="{{ route('classes.edit', $class) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ route('classes.destroy', $class) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete class?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection