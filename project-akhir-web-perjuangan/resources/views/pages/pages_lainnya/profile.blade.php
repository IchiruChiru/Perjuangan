@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','profile')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        {{-- <div class="format-table"> --}}
            <div class="cardHeader">
                <h2>Profile</h2>

            </div>
            <div class="card">
                <div class="card-body">
                 <h3>Anda Login Sebagai {{Auth::user()->level}}!</h3>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <td>Nama Akun</td>
                                <td>Email</td>
                                <td>Nomor Telephone</td>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{Auth::user()->name}}</td>
                            <td>{{Auth::user()->email}}</td>
                            <td>{{Auth::user()->no_telp}}</td>
                        </tbody>
                    </table>
                </div>
            </div>

        {{-- </div> --}}
    </div>



    {{-- Memanggil view alert --}}
    {{-- @include('layout.alert',
        [   'is_session_pesan_exist'=>Session::has('pesan'),
            'session_pesan'=>Session::get('pesan'),
            'id' => $barang->id,
            'namaTable'=>'barang'
        ]), --}}
    <script src="../js/listdata.js"></script>
@endsection
