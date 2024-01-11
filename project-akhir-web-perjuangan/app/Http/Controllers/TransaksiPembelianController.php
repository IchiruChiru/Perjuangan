<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPembelianController extends Controller
{
 
    public function index()
    {
        $barangs = Barang::all();
        return view('pages.pages_barang.list-data-barang',['barangs' => $barangs]);
    }
    }
