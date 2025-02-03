<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .logout-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h2 class="mb-4">Kasir Dashboard</h2>
        <a href="{{ route('kasir-penjualan') }}" class="btn btn-primary btn-lg">View Sales</a>
        <br>
        <form action="{{ route('logout') }}" method="POST" class="logout-button">
            @csrf
            <button type="submit" class="btn btn-danger btn-lg">Logout</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
