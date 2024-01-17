<?php

namespace App\Http\Controllers;
use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function index()
    {

        $transaksiPenjualans = TransaksiPenjualan::join('users', 'transaksi_penjualans.User_id', '=', 'users.id')
        ->select('transaksi_penjualans.*', 'users.name','users.no_telp')->orderBy('transaksi_penjualans.tgl_transaksi','desc')->paginate(10);

        return view('pages.pages_laporan.laporan-penjualan',['transaksiPenjualans' => $transaksiPenjualans]);
    }
}
