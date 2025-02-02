<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = ['total_harga'];

    public function detailPembelian()
    {
        return $this->hasMany(DetailPembelian::class, 'id_pembelian');
    }
}
