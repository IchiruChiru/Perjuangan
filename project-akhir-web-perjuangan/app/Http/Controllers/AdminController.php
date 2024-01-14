<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\TransaksiPembelian;
use App\Models\TransaksiPenjualan;
class AdminController extends Controller
{
    //
    public function index() 
    {
        $jumlahTransaksiPembelian = TransaksiPembelian::count();
        $grandTotalSeluruhTransaksiPembelian =TransaksiPembelian::sum('sub_total');
        $grandTotalSeluruhTransaksiPenjualan =TransaksiPenjualan::sum('sub_total');
        $transaksiPenjualans = TransaksiPenjualan::join('users', 'transaksi_penjualans.User_id', '=', 'users.id')
        ->select('transaksi_penjualans.*', 'users.name')->orderBy('transaksi_penjualans.tgl_transaksi','desc')->paginate(5);
        $jumlahTransaksiPenjualan = TransaksiPenjualan::count();
        $jumlahJenisBarang = Barang::count();
        $jumlahSupplier = Supplier::count();
        return view('pages.pages_lainnya.dashboard',
        [
            'jumlahTransaksiPembelian'=> $jumlahTransaksiPembelian,
            'grandTotalSeluruhTransaksiPembelian' => $grandTotalSeluruhTransaksiPembelian,
            'grandTotalSeluruhTransaksiPenjualan' => $grandTotalSeluruhTransaksiPenjualan,
            'transaksiPenjualans' => $transaksiPenjualans,
            'jumlahTransaksiPenjualan' => $jumlahTransaksiPenjualan,
            'jumlahJenisBarang' => $jumlahJenisBarang,
            'jumlahSupplier' => $jumlahSupplier,
        ]
);
    }
}
