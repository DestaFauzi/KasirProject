<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    use HasFactory;

    protected $fillable = ['id_pembelian', 'id_produk', 'jumlah', 'harga_satuan', 'subtotal'];
}
