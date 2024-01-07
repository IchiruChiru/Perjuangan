<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('pages.list-data-supplier');
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
            return redirect('/listdatasupplier');
        }else
        {
            return redirect('/tambahdatasupplier');
        }
    }
    }
