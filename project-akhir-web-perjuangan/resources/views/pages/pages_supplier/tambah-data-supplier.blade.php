@extends('layout.master')
@section('css','css/tambah-data.css')
@section('content')
    <div class="card-container">
        <div class="container">
            <div class="log-card">
                <p class="heading">Tambah Data Supplier</p>
                <form action="/datasupplier/store" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <p class="text" >Nama Supplier</p>
                        <input type="hidden" name="current_route" value="/tambahdatasupplier">
                        <input class="input" type="text" placeholder="Nama Supplier..." name="nama_supplier">
                        <p class="text">Lokasi Supplier</p>
                        <input class="input" type="text" placeholder="Lokasi Supplier..." name="lokasi_supplier">
                        <p class="text">Nomor Telpon Supplier</p>
                        <input class="input" type="text" placeholder="cth : +6223923120" name="no_telp">
                    </div>
                    <button class="btn-tambah" type="submit">Tambah Data Supplier</button>
                </form>
            </div>
        </div>
    </div>

     {{-- Memanggil view alert --}}
     @include('layout.alert',
     [   'is_session_pesan_exist'=>Session::has('pesan'),
         'session_pesan'=>Session::get('pesan'),
         'namaTable'=>'supplier'
     ]),

@endsection