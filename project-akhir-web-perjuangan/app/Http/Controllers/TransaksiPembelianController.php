<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPembelian;
use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
 
    public function index()
    {
        $transaksiPembelians = TransaksiPembelian::all();
        return view('pages.pages_laporan.laporan-pembelian',['transaksiPembelians' => $transaksiPembelians]);
    }
    }
