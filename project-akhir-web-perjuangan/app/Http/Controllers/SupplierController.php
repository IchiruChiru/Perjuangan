<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $suppliers = new Supplier();

        if($request->get("search"))
        {
            $suppliers = $suppliers->where('nama_supplier','LIKE','%'.$request->get("search")."%");
        }
        $suppliers = $suppliers->paginate(10);
        return view('pages.pages_supplier.list-data-supplier',['suppliers' => $suppliers,'request' => $request]);
    }
    public function create()
    {
        return view('pages.pages_supplier.tambah-data-supplier');
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

        return back()->with('pesan','Data Berhasil Disimpan!!');
        
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

