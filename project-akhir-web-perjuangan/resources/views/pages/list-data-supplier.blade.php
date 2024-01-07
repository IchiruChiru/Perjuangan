@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data Supplier')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>List Data Supplier</h2>
                <a class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Supplier
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Supplier</td>
                        <td>Lokasi</td>
                        <td>Nomor Telp</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PT Artic es.Tbk</td>
                        <td>Jl Beku</td>
                        <td>0843231313</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr><td>2</td>
                        <td >ARCP tbk</td>
                        <td>Jl Justice</td>
                        <td>08123901203</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Arsgardian jaya. Tbk</td>
                        <td>Jl Yggdrasil</td>
                        <td>08188312798</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Olympus Tbk</td>
                        <td>Jl Tanjung Sari</td>
                        <td>082390123</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Palembang jaya. Lte</td>
                        <td>Jl Ampera</td>
                        <td>0812093120</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>PT Superindo</td>
                        <td>Jl Pahlawan</td>
                        <td>0820312000</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>Pt Jaya Selalu</td>
                        <td>Jl Sudirman</td>
                        <td>08120931203</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Pt Jaya Abadi</td>
                        <td>Jl Rajawali</td>
                        <td>08120934812</td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="card-container">
                <div class="container">
                    <div class="log-card">
                        <div class="modal-header">
                            <p class="heading">Tambah Data Supplier</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="/datasupplier/store" method="POST">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="hidden" name="current_route" value="/listdatasupplier">
                                    <p class="text" >Nama Supplier</p>
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
      </div>
    </div>
  </div>
    <script src="../js/listdata.js"></script>
@endsection