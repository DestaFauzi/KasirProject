@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Produk</h2>

        <form action="{{ route('produk.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
