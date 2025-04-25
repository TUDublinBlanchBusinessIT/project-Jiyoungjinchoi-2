@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="mb-4 fw-bold display-5">Class Booking</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> New Booking
    </a>
</div>
    <table class="table table-bordered">
        <thead>
            <tr><th>User</th><th>Class</th><th>Status</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->gymClass->title }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <form method="POST" action="{{ route('bookings.destroy', $booking) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Cancel</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection