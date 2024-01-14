

{{-- @extends('layout.master')

@section('title','transaksi penjualan')

@section('content')

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Sale || Triangle POS</title>
    <meta content="Fahim Anzam Dip" name="author">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Favicon -->
    <link rel="icon" href="http://127.0.0.1:8000/images/favicon.png">

    <!-- Dropezone CSS -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/dropzone.css">
<!-- CoreUI CSS -->
<link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-296d3b42.css" /><link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-296d3b42.css" data-navigate-track="reload" /><link href="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/sl-1.7.0/datatables.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



<!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>

<style>
    div.dataTables_wrapper div.dataTables_length select {
        width: 65px;
        display: inline-block;
    }
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }
    .select2-container--default .select2-selection--multiple {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }
    .select2-container .select2-selection--multiple {
        height: 35px;
    }
    .select2-container .select2-selection--single {
        height: 35px;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 33px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 2px;
    }
</style>
</head>

<body class="c-app">
    <div class="c-wrapper">
        <div class="c-body">
            <main class="c-main">
                    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-12">
    <div class="card mb-0 border-0 shadow-sm">
        <div class="card-body">
            <div class="form-group mb-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="bi bi-search text-primary"></i>
                        </div>
                    </div>
                    <input wire:keydown.escape="resetQuery" wire:model.live.debounce.500ms="query" type="text" class="form-control" placeholder="Type product name or code....">
                </div>
            </div>
        </div>
    </div>

    <div wire:loading class="card position-absolute mt-1 border-0" style="z-index: 1;left: 0;right: 0;">
        <div class="card-body shadow">
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                                                <form id="sale-form" action="http://127.0.0.1:8000/sales" method="POST">
                            <input type="hidden" name="_token" value="94Gnjfiu9LZUZ5Wp1dn18PfMvLFcYNzJq4onSSHH" autocomplete="off">
                            <div class="form-row">
                             
                                <div class="col-lg-4">
                                    <div class="from-group">
                                        <div class="form-group">
                                            <label for="date">Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" required value="2024-01-14">
                                        </div>
                                    </div>
                                </div>
                            </div>
    <div>
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        <div class="table-responsive position-relative">
            <div wire:loading.flex class="col-12 position-absolute justify-content-center align-items-center" style="top:0;right:0;left:0;bottom:0;background-color: rgba(255,255,255,0.5);z-index: 99;">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th class="align-middle">Product</th>
                    <th class="align-middle text-center">Net Unit Price</th>
                    <th class="align-middle text-center">Stock</th>
                    <th class="align-middle text-center">Quantity</th>
                    <th class="align-middle text-center">Discount</th>
                    <th class="align-middle text-center">Tax</th>
                    <th class="align-middle text-center">Sub Total</th>
                    <th class="align-middle text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]-->                        <tr>
                            <td colspan="8" class="text-center">
                        <span class="text-danger">
                            Please search & select products!
                        </span>
                            </td>
                        </tr>
                     <!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-md-end">
        <div class="col-md-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Tax (0%)</th>
                        <td>(+) $0.00</td>
                    </tr>
                    <tr>
                        <th>Discount (0%)</th>
                        <td>(-) $0.00</td>
                    </tr>
                    <tr>
                        <th>Shipping</th>
                        <input type="hidden" value="0" name="shipping_amount">
                        <td>(+) $0.00</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                                                <th>
                            (=) $0.00
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <input type="hidden" name="total_amount" value="0">

 
</div>

                           
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Create Sale <i class="bi bi-check"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </main>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-4bd38d4a.js" /><script type="module" src="http://127.0.0.1:8000/build/assets/app-4bd38d4a.js" data-navigate-track="reload"></script><script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script defer src="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/sl-1.7.0/datatables.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
<script defer src="http://127.0.0.1:8000/vendor/datatables/buttons.server-side.js"></script>



    <script src="http://127.0.0.1:8000/js/jquery-mask-money.js"></script>
    <script>
        $(document).ready(function () {
            $('#paid_amount').maskMoney({
                prefix:'Rp ',
                thousands:',',
                decimal:'.',
                allowZero: true,
            });

            $('#getTotalAmount').click(function () {
                $('#paid_amount').maskMoney('mask', 0.00);
            });

            $('#sale-form').submit(function () {
                var paid_amount = $('#paid_amount').maskMoney('unmasked')[0];
                $('#paid_amount').val(paid_amount);
            });
        });
    </script>

<!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=e2b302e9"   data-csrf="94Gnjfiu9LZUZ5Wp1dn18PfMvLFcYNzJq4onSSHH" data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>
</html>

@endsection --}}