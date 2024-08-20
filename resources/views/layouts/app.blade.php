<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PlatEAD') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 60px;
            min-height: 100vh;
        }
        .navbar-custom {
            background-color: #343a40;
        }
        .navbar-custom a {
            color: #ffffff;
        }
        .container {
            margin-top: 20px;
        }
        .container-flex {
            background-color: #ffffff;
            border-top: 2px solid #343a40;
            padding: 10px 0;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    @include('parts.header')

    <div class="container">
        @yield('content')
    </div>

    @include('parts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
