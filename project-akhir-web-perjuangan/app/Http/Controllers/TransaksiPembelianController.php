<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
 
    public function index()
    {
        $transaksiPembelians = TransaksiPembelian::join('suppliers', 'transaksi_pembelians.supplier_id', '=', 'suppliers.id')
            ->select('transaksi_pembelians.*', 'suppliers.nama_supplier')
            ->get();
        return view('pages.pages_laporan.laporan-pembelian',['transaksiPembelians' => $transaksiPembelians]);
    }
    }
