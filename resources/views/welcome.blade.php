<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
        }
        .btn-custom {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="my-4">Welcome!</h1>
        <p class="lead">TIME TRACKER ATTENDANCE</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
