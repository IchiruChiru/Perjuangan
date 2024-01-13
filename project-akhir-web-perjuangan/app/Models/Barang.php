<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    public function detailTransaksiPembelian()
    {
        return $this->hasMany(DetailTransaksiPembelian::class);
    }
    public function DetailTransaksiPenjualan()
    {
        return $this->hasMany('App\Models\DetailTransaksiPenjualan');
    }

    protected $fillable = ['nama_barang','merk_barang','harga_barang','stok','peringatan_stok'];
}