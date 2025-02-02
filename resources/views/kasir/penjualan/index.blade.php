<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
</head>

<body>
    <h2>Sales Transactions</h2>
    <ul>
        @foreach ($penjualan as $item)
            <li>
                Transaction on {{ $item->tanggal_penjualan }}: Rp {{ $item->total_harga }}
            </li>
        @endforeach
    </ul>
</body>

</html>
