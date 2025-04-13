@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Membership</h2>
    <form action="{{ route('memberships.update', $membership) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Type:</label>
            <input type="text" name="type" value="{{ $membership->type }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Start Date:</label>
            <input type="date" name="start_date" value="{{ $membership->start_date }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>End Date:</label>
            <input type="date" name="end_date" value="{{ $membership->end_date }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection