<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('pages.list-data-supplier',['suppliers' => $suppliers]);
    }
    public function create()
    {
        return view('pages.tambah-data-supplier');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_supplier' => 'required',
            'lokasi_supplier' => 'required',
            'no_telp' => 'required',
        ]);

        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'lokasi_supplier' => $request->lokasi_supplier,
            'no_telp' => $request->no_telp,
        ]);

        $current_route = $request->current_route;
        if($current_route == '/listdatasupplier')
        {
            return back()->with('pesan','Data Berhasil Disimpan!!');
        }else
        {
            return back()->with('pesan','Data Berhasil Disimpan!!');
        }
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return back()->with('pesan','Data Berhasil Dihapus!!');
        
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_supplier' => 'required',
            'lokasi_supplier' => 'required',
            'no_telp' => 'required',
        ]);
        
        $supplier = Supplier::find($id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->lokasi_supplier = $request->lokasi_supplier;
        $supplier->no_telp = $request->no_telp;
        $supplier->save();
        return back()->with('pesan','Data Berhasil Disimpan!!');
    }
    }

