@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-4 fw-bold display-5">Gym Membership</h1>
    <a href="{{ route('memberships.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add Membership
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>User</th>
            <th>Type</th>
            <th>Start</th>
            <th>End</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($memberships as $membership)
            <tr>
                <td>{{ $membership->user->name }}</td>
                <td>{{ $membership->type }}</td>
                <td>{{ $membership->start_date }}</td>
                <td>{{ $membership->end_date }}</td>
                <td>
                    <!-- Show button: links to the membership details page -->
                    <a href="{{ route('memberships.show', $membership->id) }}" class="btn btn-success btn-sm">Show</a>

                    <!-- Edit button -->
                    <a href="{{ route('memberships.edit', $membership->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <!-- Delete button -->
                    <form method="POST" action="{{ route('memberships.destroy', $membership->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this membership?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
