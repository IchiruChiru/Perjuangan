<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPembelian;
class UserController extends Controller
{
    //
    public function index() 
    {
        $jumlahTransaksiPembelian = TransaksiPembelian::count();
        $grandTotalSeluruhTransaksiPembelian =TransaksiPembelian::sum('sub_total');

        
        return view('pages.pages_lainnya.dashboard',
        [
            'jumlahTransaksiPembelian'=> $jumlahTransaksiPembelian,
            'grandTotalSeluruhTransaksiPembelian' => $grandTotalSeluruhTransaksiPembelian,
        ]
);
    }
}
