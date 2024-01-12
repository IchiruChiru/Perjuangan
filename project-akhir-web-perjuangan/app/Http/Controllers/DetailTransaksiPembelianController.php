<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use Illuminate\Http\Request;

class DetailTransaksiPembelianController extends Controller
{
    public function show($id) 
    {
      $transaksiPembelians = TransaksiPembelian::with('suppliers', 'detailTransaksiPembelian')->get();

      return view('pages.pages_laporan.detail-laporan-pembelian', ['transaksiPembelians' => $transaksiPembelians]);
      
    }

    public function baru() {
        return view('pages.pages_laporan.detail');
    }
}
