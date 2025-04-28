@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="mb-4 fw-bold display-5">All Users</h1>

    <div class="d-flex flex-column align-items-end mb-4">
        <div class="d-flex gap-2 mb-2">
            <span class="badge bg-primary">Admin</span>
            <span class="badge bg-warning text-dark">Trainer</span>
            <span class="badge bg-success">Member</span>
        </div>
        <a href="{{ route('users.create') }}" class="btn btn-primary">+ Add New User</a>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table mb-0">
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
                                @if($user->role == 'admin')
                                    <span class="badge bg-primary">Admin</span>
                                @elseif($user->role == 'trainer')
                                    <span class="badge bg-warning text-dark">Trainer</span>
                                @else
                                    <span class="badge bg-success">Member</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
