<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Tambah Produk</h2>
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_produk" class="form-label">Nama Produk:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="harga_jual" class="form-label">Harga Jual:</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
            </div>
            <div class="form-group">
                <label for="harga_beli" class="form-label">Harga Beli:</label>
                <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
            </div>
            <div class="form-group">
                <label for="stok" class="form-label">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Product</button>
        </form>
        <a href="{{ route('admin-dashboard') }}" class="btn btn-secondary btn-lg btn-block mt-3">Back to Dashboard</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
