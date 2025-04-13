@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Booking</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
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
            <label>Class:</label>
            <select name="class_id" class="form-control">
                @foreach($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option value="booked">Booked</option>
                <option value="attended">Attended</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
📄 resources/views/bookin