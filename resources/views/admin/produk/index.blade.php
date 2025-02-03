@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4>Manage Products</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('produk.create') }}" class="btn btn-success mb-3">Add Product</a>
                        <ul class="list-group">
                            @foreach ($produk as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        <strong>{{ $item->nama_produk }}</strong> (Stock: {{ $item->stok }})
                                    </span>
                                    <span>
                                        <a href="{{ route('produk.edit', $item->id_produk) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('produk.destroy', $item->id_produk) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </span>

                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('admin-dashboard') }}" class="btn btn-secondary btn-lg btn-block mt-3">Back to
                            Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
