@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Trainer</h2>
    <form action="{{ route('trainers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Specialty:</label>
            <input type="text" name="specialty" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection