@extends('layout.master')
@section('css','css/tambah-data.css')
@section('content')
    <div class="card-container">
       
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
                            <p class="text">Peringatan Stok Barang</p>
                            <input class="input" type="text" placeholder="Peringatan Stok barang..." name="peringatan_stok">
                    </div>
                    <button class="btn-tambah" type="submit">
                        <i class="fa-solid fa-check"></i>
                        Tambah Data Barang</button>
                </form>
            </div>
        </div>
    </div>
 {{-- Memanggil view alert --}}
 @include('layout.alert',
 [   'is_session_pesan_exist'=>Session::has('pesan'),
     'session_pesan'=>Session::get('pesan'),
     'is_session_pesan_error_exist'=>Session::has('pesan_error'),
     'session_pesan_error'=>Session::get('pesan_error'),
     'id' => $barang->id ??'',
     'namaTable'=>'barang'
 ]),
@endsection