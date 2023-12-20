<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function kelolaBarang()
    {
        return view('pages.kelola-barang');
    }
}