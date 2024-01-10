<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(10);
        return view('pages.pages_barang.list-data-barang',['barangs' => $barangs]);
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

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'harga_barang' => $request->harga_barang,
            'stok' => $request->stok,
            'peringatan_stok' => $request->peringatan_stok,
        ]);
        return back()->with('pesan','Data Berhasil Disimpan!!');   
    }

    public function update($id ,Request $request)
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

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return back()->with('pesan','Data Berhasil Dihapus!!');
    }
}