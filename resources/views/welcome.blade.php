<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to FitFlex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex flex-column justify-content-center align-items-center vh-100">

    <div class="text-center">
        <img src="{{ asset('storage/FitFlexLogo.JPG') }}" alt="FitFlex Logo" style="width: 600px; height: auto; margin-bottom: 50px;">
        <h1 class="mb-4">Welcome to FitFlex</h1>
        <a href="{{ route('users.index') }}">
            <button class="btn btn-primary">Log In</button>
        </a>

    </div>

</body>
</html>
