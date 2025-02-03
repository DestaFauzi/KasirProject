<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Produk;

class KasirController extends Controller
{
    public function create()
    {
        $produks = Produk::all();
        return view('penjualan.create', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'kuantitas' => 'required|integer|min:1',
        ]);

        $produk = Produk::find($request->produk_id);

        if ($produk->stok < $request->kuantitas) {
            return back()->withErrors(['kuantitas' => 'Stok tidak cukup.']);
        }

        $total_harga = $produk->harga_jual * $request->kuantitas;

        Penjualan::create([
            'nama_produk' => $produk->nama_produk,
            'harga_jual' => $produk->harga_jual,
            'kuantitas' => $request->kuantitas,
            'total' => $total_harga,
        ]);

        // Kurangi stok
        $produk->stok -= $request->kuantitas;
        $produk->save();

        return redirect()->back()->with('success', 'Penjualan berhasil!');
    }
}
