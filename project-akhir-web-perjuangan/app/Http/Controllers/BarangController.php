<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('pages.list-data-barang');
    }
    public function create()
    {
        return view('pages.tambah-data-barang');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'harga_barang' => 'required',
            'stok' => 'required',
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'harga_barang' => $request->harga_barang,
            'stok' => $request->stok,
        ]);

        $current_route = $request->current_route;
        if($current_route == '/listdatabarang')
        {
            return redirect('/listdatabarang');
        }else
        {
            return redirect('/tambahdatabarang');
        }
        
       
    }
}