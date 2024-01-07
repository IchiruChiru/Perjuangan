<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    public function DetailTransaksiPembelian()
    {
        return $this->BelongsTo('App\Models\DetailTransaksiPembelian');
    }
    public function DetailTransaksiPenjualan()
    {
        return $this->BelongsTo('App\Models\DetailTransaksiPenjualan');
    }

    protected $fillable = ['nama_barang','merk_barang','harga_barang','stok','peringatan_stok'];
}