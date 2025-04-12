@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Class Bookings</h2>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">New Booking</a>
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
                        <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-sm btn-warning">Edit</a>
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