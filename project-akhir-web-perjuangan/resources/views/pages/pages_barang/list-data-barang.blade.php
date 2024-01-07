@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data barang')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2>List Data Barang</h2>
                <a class="btn" data-toggle="modal" data-target="#modal-inputbarang">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Barang
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Barang</td>
                        <td>Merk Barang</td>
                        <td>Harga</td>
                        <td>Stok</td>
                        <td>Ketersediaan</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->merk_barang }}</td>
                            <td>{{ "Rp" . $barang->harga_barang }}</td>
                            <td>{{ $barang->stok }}</td>
                            @if ($barang->stok == 0) 
                            <td><span class="status habis">Habis</span></td>
                            @elseif ($barang->stok < $barang->peringatan_stok)
                                <td><span class="status hampirhabis">Hampir Habis</span></td>
                            @else
                                <td><span class="status tersedia">Tersedia</span></td>
                            @endif
                            <td><button class="button"  data-toggle="modal" data-target="#modal-edit{{ $barang->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                            <td><button class="button-hapus" onclick="konfirmasi(event, {{ $barang->id }})"><i class="fa-solid fa-trash"></i> Hapus</button></td>

                            {{-- Modals setelah Button Edit di klik --}}
                            <div class="modal fade" id="modal-edit{{ $barang->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="heading">Edit Data Barang</p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="input-group modal-body">
                                            <form action="/databarang/update/{{ $barang->id }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="current_route" value="/listdatabarang">
                                                    <p class="text">Nama Barang</p>
                                                    <input class="input" type="text" value="{{ $barang->nama_barang }}" name="nama_barang">
                                                    <p class="text">Merk Barang</p>
                                                    <input class="input" type="text" value="{{ $barang->merk_barang }}" name="merk_barang">
                                                    <p class="text">Harga Barang</p>
                                                    <input class="input" type="text" value="{{ $barang->harga_barang }}" name="harga_barang">
                                                    <p class="text">Ubah Stok Barang</p>
                                                    <input class="input" type="text" value="{{ $barang->stok }}"name="stok">
                                                    <p class="text">Peringatan Stok Barang</p>
                                                    <input class="input" type="text" value="{{ $barang->peringatan_stok }}" name="peringatan_stok">
                                                    <button class="btn-tambah" type="submit">
                                                        Tambah Data Barang
                                                    </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @php
                            $no++;
                        @endphp


                    @endforeach
                </tbody>
            </table>
    </div>
        
        {{-- Modals Untuk Tambah Data Barang --}}       
<!-- Modal -->

        <div class="modal fade" id="modal-inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading">Tambah Data Barang</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="input-group modal-body">
                        <form action="/databarang/store" method="post">
                            {{ csrf_field() }}
                                <input type="hidden" name="current_route" value="/listdatabarang">
                                <p class="text">Nama Barang</p>
                                <input class="input" type="text" placeholder="nama barang..." name="nama_barang">
                                <p class="text">Merk Barang</p>
                                <input class="input" type="text" placeholder="merk barang..." name="merk_barang">
                                <p class="text">Harga Barang</p>
                                <input class="input" type="text" placeholder="harga barang..." name="harga_barang">
                                <p class="text">Stok Awal Barang</p>
                                <input class="input" type="text" placeholder="Stok Awal barang..." name="stok">
                                <p class="text">Peringatan Stok Barang</p>
                                <input class="input" type="text" placeholder="Peringatan Stok barang..." name="peringatan_stok">
                                <button class="btn-tambah" type="submit">
                                    Tambah Data Barang
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Memanggil view alert --}}
    @include('layout.alert',
        [   'is_session_pesan_exist'=>Session::has('pesan'),
            'session_pesan'=>Session::get('pesan'),
            'id' => $barang->id,
            'namaTable'=>'barang'
        ]),
    <script src="../js/listdata.js"></script>
@endsection