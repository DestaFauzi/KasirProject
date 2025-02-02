<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::where('id_user', Auth::id())->get();
        return view('kasir.penjualan.index', compact('penjualan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'total_harga' => 'required|numeric',
        ]);

        Penjualan::create([
            'total_harga' => $request->total_harga,
            'id_user' => Auth::id(),
        ]);

        return redirect()->route('kasir.penjualan.index')->with('success', 'Transaksi berhasil dicatat.');
    }
}
