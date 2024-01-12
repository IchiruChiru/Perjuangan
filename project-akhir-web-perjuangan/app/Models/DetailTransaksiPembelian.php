<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiPembelian extends Model
{
    use HasFactory;

    public function Barang()
    {
        return $this->belongTo('App\Models\Barang');
    }

     public function TransaksiPembelian()
     {
         return $this->belongTo('App\Models\TransaksiPembelian');
     }

     protected $fillable=['Barang_id', 'TransaksiPembelian_id','jumlah_id'];
}