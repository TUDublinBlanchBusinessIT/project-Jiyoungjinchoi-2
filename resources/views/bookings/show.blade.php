@extends('layouts.app')

@section('title', 'Booking Details')

@section('content')
<div class="container">
    <h1>{{ $booking->gymClass->title }} - Booking Details</h1>
    <p><strong>User:</strong> {{ $booking->user->name ?? 'No User Found' }}</p>
    <p><strong>Class:</strong> {{ $booking->gymClass->title }}</p>
    <p><strong>Start Time:</strong> {{ $booking->gymClass->start_time }}</p>
    <p><strong>Capacity:</strong> {{ $booking->gymClass->capacity }}</p>

    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back to Bookings</a>
</div>
@endsection
