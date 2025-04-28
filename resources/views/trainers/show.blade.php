@extends('layouts.app')

@section('title', 'Trainer Details')

@section('content')
<div class="container">
    <h1>{{ $trainer->name }} - Trainer Details</h1>
    <p><strong>Email:</strong> {{ $trainer->email }}</p>
    <p><strong>Biography:</strong> {{ $trainer->bio ?? 'No biography available' }}</p>
    <p><strong>Specialization:</strong> {{ $trainer->specialization ?? 'Not specified' }}</p>

    <a href="{{ route('trainers.index') }}" class="btn btn-secondary">Back to Trainers</a>
</div>
@endsection
