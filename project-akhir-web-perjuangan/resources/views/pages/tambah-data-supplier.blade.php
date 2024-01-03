@extends('layout.master')
@section('title','tambah Data Supplier')
@section('css','css/tambah-data.css')
@section('content')
    <div class="card-container">
        <div class="container">
            <div class="log-card">
                <p class="heading">Tambah Data Supplier</p>
                <div class="input-group">
                    <p class="text">Nama Supplier</p>
                    <input class="input" type="text" placeholder="Nama Supplier...">
                    <p class="text">Lokasi Supplier</p>
                    <input class="input" type="text" placeholder="Lokasi Supplier...">
                    <p class="text">Nomor Telpon Supplier</p>
                    <input class="input" type="text" placeholder="cth : +6223923120">
                </div>
                <button class="btn-tambah">Tambah Data Supplier</button>
            </div>
        </div>
    </div>

@endsection