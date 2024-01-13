<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function transaksi_pembelians(){
        return $this->hasMany('App\Models\TransaksiPembelian');
    }
    protected $fillable = ['nama_supplier','lokasi_supplier','no_telp'];
}