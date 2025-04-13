@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Booking</h2>
    <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option value="booked" @if($booking->status == 'booked') selected @endif>Booked</option>
                <option value="attended" @if($booking->status == 'attended') selected @endif>Attended</option>
                <option value="cancelled" @if($booking->status == 'cancelled') selected @endif>Cancelled</option>
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection