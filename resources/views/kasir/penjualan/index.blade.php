<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Form Penjualan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/kasir/penjualan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="produk_id" class="form-label">Pilih Produk:</label>
                <select name="produk_id" id="produk_id" class="form-select" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach ($produks as $produk)
                        <option value="{{ $produk->id }}">{{ $produk->nama_produk }} (Stok: {{ $produk->stok }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kuantitas" class="form-label">Kuantitas:</label>
                <input type="number" name="kuantitas" id="kuantitas" class="form-control" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Proses Penjualan</button>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
