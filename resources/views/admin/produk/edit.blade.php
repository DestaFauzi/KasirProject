@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Produk</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" name="nama_produk" id="nama_produk"
                                    class="form-control @error('nama_produk') is-invalid @enderror"
                                    value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                                @error('nama_produk')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="harga_jual">Harga Jual</label>
                                <input type="number" step="0.01" name="harga_jual" id="harga_jual"
                                    class="form-control @error('harga_jual') is-invalid @enderror"
                                    value="{{ old('harga_jual', $produk->harga_jual) }}" required>
                                @error('harga_jual')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="harga_beli">Harga Beli</label>
                                <input type="number" step="0.01" name="harga_beli" id="harga_beli"
                                    class="form-control @error('harga_beli') is-invalid @enderror"
                                    value="{{ old('harga_beli', $produk->harga_beli) }}" required>
                                @error('harga_beli')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" id="stok"
                                    class="form-control @error('stok') is-invalid @enderror"
                                    value="{{ old('stok', $produk->stok) }}" required>
                                @error('stok')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
