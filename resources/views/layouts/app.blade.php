<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitFlex | @yield('title', 'Dashboard')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body { 
            background:  #adb5bd; 
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar styles */
        .navbar { 
            background-color: #1f2937; 
        }

        .navbar-brand, .nav-link, .nav-link:hover { 
            color: #fff !important; 
        }

        .navbar-toggler-icon {
            background-color: #fff; 
        }

        /* Card and table styles */
        .card { 
            border: none; 
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); 
        }

        .table th { 
            background-color: #dee2e6; 
        }
        

        /* Button colors */
        .btn-primary {
            background-color: #00008B;
            border-color: #007bff;
        }

        .btn-info {
            background-color: #006400;
            border-color: #20c997;
        }

        .btn-warning {
            background-color: #B8860B;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #800000;
            border-color: #dc3545;
        }

        /* Responsive styling */
        .container {
            margin-top: 20px;
        }

        /* Table responsive */
        @media (max-width: 768px) {
            .navbar-collapse {
                background-color: #1f2937;
                padding: 10px;
            }

            .table th, .table td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">FitFlex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('classes.index') }}">Classes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('trainers.index') }}">Trainers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('memberships.index') }}">Memberships</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
