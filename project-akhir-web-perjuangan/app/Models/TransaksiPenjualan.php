<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    use HasFactory;

    protected $fillable = ['User_id','sub_total','tgl_transaksi','id'];

    public function user(){
        return $this->belongsTo('app\Models\User');
    }
}
