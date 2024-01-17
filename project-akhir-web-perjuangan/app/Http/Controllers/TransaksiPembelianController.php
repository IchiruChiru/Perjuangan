<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\DetailTransaksiPembelian;
use App\Models\Supplier;
use App\Models\TransaksiPembelian;
use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
    public function index() 
    {
        $barangs = Barang::orderBy('nama_barang', 'asc')->get();
        $suppliers = Supplier::orderBy('nama_supplier', 'asc')->get();
        return view('pages.pages_transaksi.transaksi-pembelian',
        ['barangs' => $barangs,'suppliers' => $suppliers]);
    }

    public $query;
    public $products;

    public function selectProduct($nama, $merk, $harga, $stok)
    {
        // Kirim event untuk memberi tahu komponen lain bahwa produk telah dipilih
        $this->emit('productSelected', $nama, $merk, $harga, $stok);
    }

    public function store(Request $request)
    {
        // Validasi apakah 'total_harga' ada dan tidak kosong
        // $request->validate([
        //     'total_harga' => 'required|numeric|min:0',
        // ]);
        $supplierId = 1;
        $transaksi = new TransaksiPembelian();
        $jmlh_transaksi = TransaksiPembelian::count();
        $transaksi->fill([
            'Transaksi_Pembelian_id' => $jmlh_transaksi,
            'sub_total' => $request->total_harga_barang,
            'Supplier_id' => $request->Supplier_id,
            'tgl_transaksi' => now(),
        ]);
        $transaksi->save();
    
        $no_daftar = 0;
        foreach ($request->get('id') as $id) {
            $barang = Barang::findOrFail($id);
            $barang->fill([
                'stok' => $barang->stok + $request->get('quantity')[$no_daftar],
            ]);
    
            $barang->save();
            $transaksi_item = new DetailTransaksiPembelian();
            $transaksi_item->fill([
                'Transaksi_Pembelian_id' => $transaksi->id,
                'Barang_id' => $id,
                'jumlah_beli' => $request->get('quantity')[$no_daftar]
            ]);
            $transaksi_item->save();
    
            $no_daftar++;
        }
    
        return redirect()->back()->with('pesan','Transaksi Pembelian Berhasil!!');
    }
    
}
