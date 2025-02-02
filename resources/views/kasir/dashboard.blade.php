<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Dashboard</title>
</head>

<body>
    <h2>Kasir Dashboard</h2>
    <a href="{{ route('kasir.penjualan.index') }}">View Sales</a>
    <br>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
