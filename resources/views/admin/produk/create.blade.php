<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h2>Add Product</h2>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label for="nama_produk">Product Name:</label>
        <input type="text" id="nama_produk" name="nama_produk" required>
        <br>
        <label for="harga_jual">Selling Price:</label>
        <input type="number" id="harga_jual" name="harga_jual" required>
        <br>
        <label for="harga_beli">Purchase Price:</label>
        <input type="number" id="harga_beli" name="harga_beli" required>
        <br>
        <label for="stok">Stock:</label>
        <input type="number" id="stok" name="stok" required>
        <br>
        <button type="submit">Add Product</button>
    </form>
</body>

</html>
