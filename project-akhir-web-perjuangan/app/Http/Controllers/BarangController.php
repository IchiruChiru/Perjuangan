<?php

namespace App\Http\Controllers;

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
}