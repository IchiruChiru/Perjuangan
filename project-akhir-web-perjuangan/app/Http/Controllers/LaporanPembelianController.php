<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use App\Models\DetailTransaksiPembelian; // Menambahkan model DetailTransaksiPembelian
use Illuminate\Http\Request;

class LaporanPembelianController extends Controller
{
    public function index()
    {

        // $transaksiPembelians = DetailTransaksiPembelian::join('barangs','detail_transaksi_pembelians.Barang_id','=','barangs.id')
        //     ->select('detail_transaksi_pembelians.*','barangs.*')
        //     ->get();
        $transaksiPembelians = TransaksiPembelian::join('suppliers', 'transaksi_pembelians.supplier_id', '=', 'suppliers.id')
        ->select('transaksi_pembelians.*', 'suppliers.nama_supplier','suppliers.no_telp')->orderBy('transaksi_pembelians.tgl_transaksi','desc')->paginate(10);

        // Menambahkan join untuk mengakses data detail pembelian
        
        // $transaksiPembelians->load('detailTransaksiPembelian.barang'); // Menyesuaikan relasi dengan 'detailTransaksiPembelian.barang'

        return view('pages.pages_laporan.laporan-pembelian', ['transaksiPembelians' => $transaksiPembelians]);
    }
}
