@extends('layout.master')
@section('title','tambah Data barang')
@section('css','css/tambah-data.css')
@section('content')
    <div class="card-container">
        <div class="container">
            <div class="log-card">
                <p class="heading">Tambah Data Barang</p>
                <form action="/databarang/store" method="post">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <p class="text">Nama Barang</p>
                            <input type="hidden" name="current_route" value="/tambahdatabarang">
                            <input class="input" type="text" placeholder="nama barang..." name="nama_barang">
                            <p class="text">Merk Barang</p>
                            <input class="input" type="text" placeholder="merk barang..." name="merk_barang">
                            <p class="text">Harga Barang</p>
                            <input class="input" type="text" placeholder="harga barang..." name="harga_barang">
                            <p class="text">Stok Awal Barang</p>
                            <input class="input" type="text" placeholder="Stok Awal barang..." name="stok">
                    </div>
                    <button class="btn-tambah" type="submit">
                        <i class="fa-solid fa-check"></i>
                        Tambah Data Barang</button>
                </form>
            </div>
        </div>
    </div>

@endsection