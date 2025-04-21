@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">All Users</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add New User
    </a>
</div>
<div class="mb-2">
    <span class="badge bg-primary">Admin</span>
    <span class="badge bg-warning text-dark">Trainer</span>
    <span class="badge bg-success">Member</span>
</div>


<div class="card p-3">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th> {{-- ✅ Add this --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
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
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-dark">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center text-muted">No users found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
