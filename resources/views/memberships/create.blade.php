@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Membership</h2>
    <form action="{{ route('memberships.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>User:</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Type:</label>
            <input type="text" name="type" class="form-control" placeholder="monthly, yearly etc.">
        </div>

        <div class="mb-3">
            <label>Start Date:</label>
            <input type="date" name="start_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>End Date:</label>
            <input type="date" name="end_date" class="form-control">
        </div>

        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection