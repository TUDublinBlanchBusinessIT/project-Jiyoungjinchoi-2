@extends('layouts.app')

@section('title', 'Bookings')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-4 fw-bold display-5">Class Bookings</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Booking
    </a>
</div>

<!-- Table displaying bookings -->
<table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th>Class</th>
            <th>Start Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->user->name ?? 'No User' }}</td>
                <td>{{ $booking->gymClass->title }}</td>
                <td>{{ $booking->gymClass->start_time }}</td>
                <td>
                    <!-- Show button: links to the booking details page -->
                    <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-success btn-sm">Show</a>

                    <!-- Edit button -->
                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete button -->
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
