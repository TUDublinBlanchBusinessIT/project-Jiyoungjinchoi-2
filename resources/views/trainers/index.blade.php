@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="mb-4 fw-bold display-5">All Trainers</h1>
    <a href="{{ route('trainers.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add trainer
    </a>
</div>
    <table class="table table-bordered">
        <thead>
            <tr><th>Name</th><th>Specialty</th><th>Phone</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($trainers as $trainer)
                <tr>
                    <td>{{ $trainer->name }}</td>
                    <td>{{ $trainer->specialty }}</td>
                    <td>{{ $trainer->phone }}</td>
                    <td>
                        <a href="{{ route('trainers.edit', $trainer) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ route('trainers.destroy', $trainer) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection