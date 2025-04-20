<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitFlex | @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { background: #f4f6f8; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #1f2937; }
        .navbar-brand, .nav-link, .nav-link:hover { color: #fff !important; }
        .card { border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .table th { background-color: #f8f9fa; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-4 py-3">
    <a class="navbar-brand fw-bold" href="#">FitFlex</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('classes.index') }}">Classes</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('trainers.index') }}">Trainers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('memberships.index') }}">Memberships</a></li>
    </ul>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
