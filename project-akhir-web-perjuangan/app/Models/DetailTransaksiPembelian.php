<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiPembelian extends Model
{
    use HasFactory;

    public function barangs()
    {
        return $this->belongsTo(Barang::class);
    }

    public function TransaksiPembelian()
    {
        return $this->belongsTo('App\Models\TransaksiPembelian');
    }

    protected $fillable=['Barang_id', 'Transaksi_Pembelian_id','jumlah_beli'];
}