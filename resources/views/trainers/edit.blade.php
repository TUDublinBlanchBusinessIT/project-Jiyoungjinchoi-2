@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Trainer</h2>
    <form action="{{ route('trainers.update', $trainer) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $trainer->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Specialty:</label>
            <input type="text" name="specialty" value="{{ $trainer->specialty }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $trainer->phone }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection