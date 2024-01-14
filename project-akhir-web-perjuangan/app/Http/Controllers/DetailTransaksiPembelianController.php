<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use Illuminate\Http\Request;

class DetailTransaksiPembelianController extends Controller
{
  public function index($id)
  {

      // $transaksiPembelians = DetailTransaksiPembelian::join('barangs','detail_transaksi_pembelians.Barang_id','=','barangs.id')
      //     ->select('detail_transaksi_pembelians.*','barangs.*')
      //     ->get();
      $transaksiPembelians = TransaksiPembelian::join('suppliers', 'transaksi_pembelians.supplier_id', '=', 'suppliers.id')
      ->join('detail_transaksi_pembelians','detail_transaksi_pembelians.Transaksi_Pembelian_id','=','transaksi_pembelians.id')
      ->join('barangs','detail_transaksi_pembelians.Barang_id','=','barangs.id')
      ->where('transaksi_pembelians.id', $id)
          ->select('transaksi_pembelians.*', 'suppliers.*','detail_transaksi_pembelians.*','barangs.*')
          ->paginate(10);

      // Menambahkan join untuk mengakses data detail pembelian
      
      // $transaksiPembelians->load('detailTransaksiPembelian.barang'); // Menyesuaikan relasi dengan 'detailTransaksiPembelian.barang'

      return view('pages.pages_laporan.detail-laporan-pembelian', ['transaksiPembelians' => $transaksiPembelians]);
  }
}
