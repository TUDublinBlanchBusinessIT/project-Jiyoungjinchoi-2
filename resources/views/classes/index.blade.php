@extends('layouts.app')

@section('title', 'Classes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Fitness Classes</h2>
    <a href="{{ route('classes.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add New Class
    </a>
</div>

<div class="card p-3">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th> {{-- Added --}}
                <th>Trainer</th>
                <th>Time</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($classes as $class)
                <tr>
                    <td>{{ $class->title }}</td>
                    <td>{{ $class->description ?? '—' }}</td> {{-- Show Description --}}
                    <td>{{ $class->trainer->name ?? '—' }}</td>
                    <td>{{ \Carbon\Carbon::parse($class->start_time)->format('d M, H:i') }}</td>
                    <td>{{ $class->capacity }}</td>
                    <td>
                        <a href="{{ route('classes.edit', $class) }}" class="btn btn-sm btn-secondary">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('classes.destroy', $class) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this class?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center text-muted">No classes available.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
