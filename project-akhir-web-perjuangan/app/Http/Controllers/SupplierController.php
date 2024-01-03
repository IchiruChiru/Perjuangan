<?php

namespace App\Http\Controllers;

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
}