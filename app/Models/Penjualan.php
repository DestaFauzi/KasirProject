<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['total_harga', 'id_user'];

    public function detailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_penjualan');
    }
}
