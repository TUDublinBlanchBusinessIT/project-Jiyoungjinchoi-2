@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gym Memberships</h2>
    <a href="{{ route('memberships.create') }}" class="btn btn-primary mb-3">Add Membership</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>User</th><th>Type</th><th>Start</th><th>End</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($memberships as $membership)
                <tr>
                    <td>{{ $membership->user->name }}</td>
                    <td>{{ $membership->type }}</td>
                    <td>{{ $membership->start_date }}</td>
                    <td>{{ $membership->end_date }}</td>
                    <td>
                        <a href="{{ route('memberships.edit', $membership) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ route('memberships.destroy', $membership) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection