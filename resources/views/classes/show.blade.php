@extends('layouts.app')

@section('title', 'Class Details')

@section('content')
<div class="container mt-4">
    <h1>{{ $class->title }}</h1>
    <p><strong>Description:</strong> {{ $class->description }}</p>
    <p><strong>Trainer:</strong> {{ $class->trainer->name ?? 'No Trainer Assigned' }}</p>

    <!-- Back Button -->
    <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back to Classes</a>
</div>
@endsection
