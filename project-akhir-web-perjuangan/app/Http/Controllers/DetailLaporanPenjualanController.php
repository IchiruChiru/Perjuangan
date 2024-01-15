<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;

class DetailLaporanPenjualanController extends Controller
{
  public function index($id)
  {

      // $transaksipenjualans = DetailTransaksiPembelian::join('barangs','detail_transaksi_penjualans.Barang_id','=','barangs.id')
      //     ->select('detail_transaksi_penjualans.*','barangs.*')
      //     ->get();
      $transaksiPenjualans = TransaksiPenjualan::join('users', 'transaksi_penjualans.User_id', '=', 'users.id')
      ->join('detail_transaksi_penjualans','detail_transaksi_penjualans.Transaksi_Penjualan_id','=','transaksi_penjualans.id')
      ->join('barangs','detail_transaksi_penjualans.Barang_id','=','barangs.id')
      ->where('transaksi_penjualans.id', $id)
          ->select('transaksi_penjualans.*', 'users.*','detail_transaksi_penjualans.*','barangs.*')
          ->paginate(10);

      // Menambahkan join untuk mengakses data detail pembelian

      // $transaksipenjualans->load('detailTransaksiPembelian.barang'); // Menyesuaikan relasi dengan 'detailTransaksiPembelian.barang'

      return view('pages.pages_laporan.detail-laporan-penjualan', ['transaksiPenjualans' => $transaksiPenjualans]);
  }
}
