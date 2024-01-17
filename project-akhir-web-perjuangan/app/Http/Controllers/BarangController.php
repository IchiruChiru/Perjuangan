<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailTransaksiPembelian;
use App\Models\DetailTransaksiPenjualan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $barangs = new Barang();

        if($request->get("search"))
        {
            $barangs = $barangs->where('nama_barang','LIKE','%'.$request->get("search")."%");
            
        }
        $barangs = $barangs->paginate(10);
        return view('pages.pages_barang.list-data-barang',['barangs' => $barangs,'request' => $request]);
    }
    public function create()
    {
        return view('pages.pages_barang.tambah-data-barang');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'harga_barang' => 'required',
            'stok' => 'required',
            'peringatan_stok' => 'required',
        ]);

        if($request->stok <= 0)
        {
            return back()->with('pesan_error','Stok tidak boleh minus!!'); 
        }
        else if ($request->peringatan_stok <= 0)
        {
            return back()->with('pesan_error','Peringatan Stok tidak boleh minus!!'); 
        }
        else 
        {
            Barang::create([
                'nama_barang' => $request->nama_barang,
                'merk_barang' => $request->merk_barang,
                'harga_barang' => $request->harga_barang,
                'stok' => $request->stok,
                'peringatan_stok' => $request->peringatan_stok,
            ]);
            return back()->with('pesan','Data Berhasil Disimpan!!');   
        }

    }

    public function update($id ,Request $request)
    {

        if($request->stok < 0)
        {
            return back()->with('pesan_error','Stok tidak boleh minus!!'); 
        }
        else if ($request->peringatan_stok < 0)
        {
            return back()->with('pesan_error','Peringatan Stok tidak boleh minus!!'); 
        }
        else 
        {
            $barang = Barang::find($id);
            $barang->nama_barang = $request->nama_barang;
            $barang->merk_barang = $request->merk_barang;
            $barang->harga_barang = $request->harga_barang;
            $barang->stok = $request->stok;
            $barang->peringatan_stok = $request->peringatan_stok;
            $barang->save();
    
            return back()->with('pesan','Data Berhasil Disimpan!!');

        }
        
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barangs_from_detail_penjualan = DetailTransaksiPenjualan::all();

        foreach($barangs_from_detail_penjualan as $barang_from_detail_penjualan )
        {
            if($barang_from_detail_penjualan->Barang_id == $id)
            {
                return back()->with('pesan_error','Barang tidak dapat dihapus, karena telah ada di Laporan Pembelian!!'); 
            }
        }
        $barangs_from_detail_pembelian = DetailTransaksiPembelian::all();

        foreach($barangs_from_detail_pembelian as $barang_from_detail_pembelian )
        {
            if($barang_from_detail_pembelian->Barang_id == $id)
            {
                return back()->with('pesan_error','Barang tidak dapat dihapus, karena telah ada di Laporan Penjualan!!'); 
            }
            else {
                $barang->delete();
                return back()->with('pesan','Data Berhasil Dihapus!!');
            }
        }
        $barang->delete();
        return back()->with('pesan','Data Berhasil Dihapus!!');
    }
}