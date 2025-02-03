<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Penjualan; // Pastikan model Penjualan diimpor

class KasirController extends Controller
{
    // Menampilkan dashboard kasir
    public function index()
    {
        return view('kasir.dashboard');
    }

    // Menampilkan daftar penjualan
    public function penjualanIndex()
    {
        $penjualans = Penjualan::all(); // Ambil semua data penjualan
        return view('kasir.penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $produks = Produk::all();
        dd($produks);
        return view('penjualan.create', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|numeric',
        ]);

        $produk = Produk::find($request->produk_id);
        Penjualan::create([
            'nama_produk' => $produk->nama_produk,
            'harga_jual' => $produk->harga_jual,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);

        return redirect()->route('kasir.penjualan.index')->with('success', 'Penjualan berhasil ditambahkan.');
    }
}
