@extends('layout.master')
@section('title','tambah Data barang')
@section('css','css/tambah-data.css')
@section('content')
    <div class="card-container">
        <div class="container">
            <div class="log-card">
                <p class="heading">Tambah Data Barang</p>
                <div class="input-group">
                    <p class="text">Nama Barang</p>
                    <input class="input" type="text" placeholder="nama barang...">
                    <p class="text">Merk Barang</p>
                    <input class="input" type="text" placeholder="merk barang...">
                    <p class="text">Harga Barang</p>
                    <input class="input" type="text" placeholder="harga barang...">
                    <p class="text">Stok Awal Barang</p>
                    <input class="input" type="text" placeholder="Stok Awal barang...">
                </div>
                <button class="btn-tambah">Tambah Data Barang</button>
            </div>
        </div>
    </div>

@endsection