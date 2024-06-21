<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            font-family: Calibri, sans-serif;
        }
        .auth-labels {
            display: inline-block;
            width: 8em;
        }
        .auth-textbox {
            margin-bottom: .5em;
        }
        body {
            background: linear-gradient(to right, #ff4e50, #f9d423); /* Red to white gradient */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #ff4e50;
            border-color: #ff4e50;
        }
        .btn-primary:hover {
            background-color: #e43e40;
            border-color: #e43e40;
        }
    </style>
</head>
<body>
    @if (!Auth::check())
        @yield('auth-content')
    @else
        @yield('page-content')
    @endif
</body>
</html>
