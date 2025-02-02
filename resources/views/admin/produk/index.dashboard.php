<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>

<body>
    <h2>Manage Products</h2>
    <a href="{{ route('produk.create') }}">Add Product</a>
    <ul>
        @foreach ($produk as $item)
        <li>
            {{ $item->nama_produk }} (Stock: {{ $item->stok }})
            <a href="{{ route('produk.edit', $item) }}">Edit</a>
            <form action="{{ route('produk.destroy', $item) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>