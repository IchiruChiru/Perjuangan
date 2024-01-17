<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\DetailTransaksiPenjualan;
use App\Models\TransaksiPenjualan;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiPenjualanController extends Controller
{
    public function index() 
    {
        $barangs = Barang::orderBy('nama_barang', 'asc')->get();
        $users = User::orderBy('name', 'asc')->get();
        return view('pages.pages_transaksi.transaksi-penjualan',
        ['barangs' => $barangs,'users' => $users]);
    }

    public $query;
    public $products;

    public function selectProduct($nama, $merk, $harga, $stok)
    {
        $this->emit('productSelected', $nama, $merk, $harga, $stok);
    }

    public function store(Request $request)
    {
        // Validasi apakah 'total_harga' ada dan tidak kosong
        // $request->validate([
        //     'total_harga' => 'required|numeric|min:0',
        // ]);
        $transaksi = new TransaksiPenjualan();
        $jumlah_transaksi = TransaksiPenjualan::count();
        $transaksi->fill([
            'Transaksi_Penjualan_id' => $jumlah_transaksi ,
            'sub_total' => $request->total_harga_barang,
            'User_id' => $request->User_id,
            'tgl_transaksi' => now(),
        ]);
    
        $no_daftar = 0;
        //Cek apakah stok barang cukup atau tidak
        foreach ($request->get('id') as $id) {
            $barang = Barang::findOrFail($id);
            if($barang->stok < $request->get('quantity')[$no_daftar]) {
                return redirect()->back()->with('pesan_error','Stok ' . $barang->nama_barang . ' hanya tersisa ' . $barang->stok );
            }
        }

        $transaksi->save();
        foreach ($request->get('id') as $id) {

            $barang = Barang::findOrFail($id);
            $barang->fill([
                'stok' => $barang->stok - $request->get('quantity')[$no_daftar],
            ]);

            $barang->save();
    
            $transaksi_item = new DetailTransaksiPenjualan();
            $transaksi_item->fill([
                'Transaksi_Penjualan_id' => $transaksi->id,
                'Barang_id' => $id,
                'jumlah_beli' => $request->get('quantity')[$no_daftar]
            ]);
            $transaksi_item->save();
    
            $no_daftar++;
        }
    
        return redirect()->back()->with('pesan','Transaksi Pembelian Berhasil!!');
    }
    
}
