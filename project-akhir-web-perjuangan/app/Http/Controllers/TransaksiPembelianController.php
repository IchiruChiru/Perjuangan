<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
    public function index()
    {
        return view('pages.pages_transaksi.transaksi-pembelian');
    }
}
