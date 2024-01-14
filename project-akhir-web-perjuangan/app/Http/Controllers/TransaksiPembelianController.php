<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
    public function index() 
    {
        $barangs = Barang::all();
        return view('pages.pages_transaksi.transaksi-pembelian',['barangs' => $barangs]);
    }

    public $query;
    public $products;

    public function render()
    {
        $this->products = Barang::where('nama_barang', 'like', '%' . $this->query . '%')
            ->get();

            return view('pages.pages_transaksi.search-barang');
    }

    public function selectProduct($nama, $merk, $harga, $stok)
    {
        // Kirim event untuk memberi tahu komponen lain bahwa produk telah dipilih
        $this->emit('productSelected', $nama, $merk, $harga, $stok);
    }
}
