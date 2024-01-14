<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPembelian extends Model
{
    use HasFactory;

    protected $fillable = ['Supplier_id','sub_total','tgl_transaksi','id'];
    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'Supplier_id','id');
    }

    public function detailTransaksiPembelian()
    {
        return $this->hasMany(DetailTransaksiPembelian::class, 'Transaksi_Pembelian_id', 'id');
    }

}