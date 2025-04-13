@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Role:</label>
            <select name="role" class="form-control">
                <option value="member" @if($user->role == 'member') selected @endif>Member</option>
                <option value="trainer" @if($user->role == 'trainer') selected @endif>Trainer</option>
                <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection