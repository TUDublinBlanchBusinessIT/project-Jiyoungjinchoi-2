@extends('layouts.app')

@section('title', 'Membership Details')

@section('content')
<div class="container">
    <h1>Membership Details for {{ $membership->user->name }}</h1>
    
    <p><strong>User:</strong> {{ $membership->user->name }}</p>
    <p><strong>Email:</strong> {{ $membership->user->email }}</p>
    <p><strong>Membership Type:</strong> {{ $membership->type }}</p>
    <p><strong>Start Date:</strong> {{ $membership->start_date }}</p>
    <p><strong>End Date:</strong> {{ $membership->end_date }}</p>

    <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Back to Memberships</a>
</div>
@endsection
