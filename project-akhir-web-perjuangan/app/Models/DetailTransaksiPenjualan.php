<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiPenjualan extends Model
{
    use HasFactory;

    public function Barang()
    {
        return $this->hasMany('App\Models\Barang');
    }

    // public function TransaksiPenjualan()
    // {
    //     return $this->belongsTo('App\Models\TransaksiPenjualan');
    // }
}