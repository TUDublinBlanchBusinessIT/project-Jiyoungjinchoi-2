@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">All Users</h1>

    <div class="mb-4">
        <span class="badge bg-primary">Admin</span>
        <span class="badge bg-warning text-dark">Trainer</span>
        <span class="badge bg-success">Member</span>
    </div>

    <div class="mb-4">
        <a href="{{ route('users.create') }}" class="btn btn-primary">+ Add New User</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->role === 'admin')
                                <span class="badge bg-primary">Admin</span>
                            @elseif ($user->role === 'trainer')
                                <span class="badge bg-warning text-dark">Trainer</span>
                            @else
                                <span class="badge bg-success">Member</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
