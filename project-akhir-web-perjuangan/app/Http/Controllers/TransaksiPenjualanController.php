<?php

namespace App\Http\Controllers;
use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;

class TransaksiPenjualanController extends Controller
{
    public function index()
    {
        $transaksiPenjualans = TransaksiPenjualan::all();

        return view('pages.pages_laporan.laporan-penjualan',['transaksiPenjualans' => $transaksiPenjualans]);
    }
}
