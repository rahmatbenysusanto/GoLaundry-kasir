@extends('layout')
@section('title', 'Buat Transaksi')

@section('css')
    <!-- multi.js css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/multi.js/multi.min.css') }}" />
    <!-- autocomplete css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('konten')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Buat Transaksi Laundry</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="row g-3 d-flex align-items-end">
                                <div class="col-8">
                                    <div>
                                        <label for="autoCompleteFruit" class="text-muted">Nama Pelanggan</label>
                                        <div class="autoComplete_wrapper" role="combobox" aria-owns="autoComplete_list_1" aria-haspopup="true" aria-expanded="false">
                                            <input id="client" name="client" type="text" dir="ltr" spellcheck="false" autocomplete="off" autocapitalize="off" aria-controls="autoComplete_list_1" aria-autocomplete="both" placeholder="Cari Pelanggan..." aria-activedescendant="">
                                            <ul id="autoComplete_list_1" role="listbox" hidden=""><li id="autoComplete_result_0" role="option">Le<mark>m</mark>on</li><li id="autoComplete_result_1" role="option">Li<mark>m</mark>e</li><li id="autoComplete_result_2" role="option"><mark>M</mark>ango</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPelanggan">Tambah Pelanggan Baru</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-3 d-flex align-items-end mt-2">
                                <div class="col-8">
                                    <div>
                                        <label for="layanan" class="text-muted">Pilih Layanan</label>
                                        <select class="form-select" aria-label="Pilih Layanan" name="layanan" id="layanan">
                                            <option value="0">Pilih Layanan</option>
                                            @foreach($layanan as $ly)
                                                <option value="{{ $ly->id }}">{{ $ly->nama_layanan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button onclick="tambahLayanan()" type="button" class="btn btn-primary">Pilih Layanan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-3 d-flex align-items-end mt-2">
                                <div class="col-8">
                                    <div>
                                        <label for="parfum" class="text-muted">Pilih Parfum</label>
                                        <select class="form-select" aria-label="Pilih Parfum" name="parfum" id="parfum">
                                            <option value="0">Pilih Parfum</option>
                                            @foreach($parfum as $pr)
                                                <option value="{{ $pr->id }}">{{ $pr->nama_parfum }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="md-3">
                                <label for="" class="text-muted">Pembayaran</label>
                                <select class="form-select mb-3" name="pembayaran" id="pembayaran">
                                        <option selected>Pilih Pembayaran</option>
                                    @foreach($pembayaran as $pm)
                                        <option value="{{ $pm->id }}">{{ $pm->pembayaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="md-3">
                                <label for="statusPembayaran" class="text-muted">Status Pembayaran</label>
                                <select class="form-select mb-3" name="statusPembayaran" id="statusPembayaran">
                                    <option selected>Pilih Status Pembayaran</option>
                                    <option value="1">Bayar Langsung</option>
                                    <option value="2">Bayar Saat Pengambilan</option>
                                </select>
                            </div>
                        </div>
{{--                        <div class="col-12">--}}
{{--                            <div class="md-3">--}}
{{--                                <label for="diskon" class="text-muted">Diskon</label>--}}
{{--                                <select class="form-select mb-3" name="diskon" id="diskon">--}}

{{--                                    <option value="1">Bayar Langsung</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody id="cartTable">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h2>Total Harga : </h2>
                            <h2 class="ms-1" id="totalHarga"></h2>
                        </div>
                        <div>
                            <button onclick="buatTransaksi()" class="btn btn-primary">Buat Transaksi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals Tambah Pelanggan -->
    <div class="modal fade" id="tambahPelanggan" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Tambah Pelanggan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambahClient') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div>
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div>
                                <label for="noHp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" id="noHp" name="noHp">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('js')
        <!-- multi.js -->
        <script src="{{ asset('assets/libs/multi.js/multi.min.js') }}"></script>
        <!-- autocomplete js -->
        <script src="{{ asset('assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

        <!-- input spin init -->
        <script src="{{ asset('assets/js/pages/form-input-spin.init.js') }}"></script>
        <!-- input flag init -->
        <script src="{{ asset('assets/js/pages/flag-input.init.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $.ajax({
                url: '{{ route('getClient') }}',
                method: 'GET',
                success: function (res) {
                    let client = [];
                    for (let a = 0; a < res.length; a++) {
                        let data = res[a].name + ' - ' + res[a].noHp;
                        client.push(data);
                    }

                    let multiSelectBasic = document.getElementById("multiselect-basic"),
                        multiSelectHeader = (
                            multiSelectBasic&&multi(
                                multiSelectBasic,
                                {enable_search:!1}),
                                document.getElementById("multiselect-header")
                        ),
                        multiSelectOptGroup = (multiSelectHeader&&multi(multiSelectHeader,
                            {non_selected_header:"Cars",selected_header:"Favorite Cars"}),
                            document.getElementById("multiselect-optiongroup")),
                        autoCompleteFruit=(multiSelectOptGroup&&multi(multiSelectOptGroup,
                            {enable_search:!0}),
                            new autoComplete({selector:"#client",
                                    placeHolder:"Cari Nama Pelanggan...",
                                    data:{
                                        src: client,
                                        cache:!0},
                                    resultsList:{element:function(e,t){let l;t.results.length||((l=document.createElement("div")).setAttribute("class","no_result"),
                                            l.innerHTML='<span>Found No Results for "'+t.query+'"</span>',e.prepend(l))},
                                        noResults:!0},resultItem:{highlight:!0},
                                    events:{
                                        input:{
                                            selection:function(e){e=e.detail.selection.value;autoCompleteFruit.input.value=e}
                                        }
                                    }
                                }
                            ));
                }
            });

            function getCartTransaksi() {
                $.ajax({
                    url: '{{ route('getChartTransaksi') }}',
                    method: 'GET',
                    success: function (res) {
                        let html = '';
                        let totalHarga = 0;

                        function rupiah(angka) {
                            return new Intl.NumberFormat('id-ID',
                                { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }
                            ).format(angka);
                        }

                        for (let a = 0; a < res.length; a++) {
                            totalHarga += parseInt(res[a].count) * parseInt(res[a].layanan.harga);
                            html += `
                            <tr>
                                <td style="padding-top: 20px">${parseInt(a + 1)}</td>
                                <td style="padding-top: 20px">${res[a].layanan.nama_layanan}</td>
                                <td style="padding-top: 20px">${ rupiah(res[a].layanan.harga) }</td>
                                <td style="max-width: 30px">
                                    <div class="input-group">
                                        <input type="number" id="jumlah${res[a].id}" onchange="updateJumlah('${res[a].id}')" name="jumlah" class="form-control" value="${res[a].count}" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">KG</span>
                                    </div>
                                </td>
                                <td style="padding-top: 20px">${ rupiah(parseInt(res[a].total_price)) }</td>
                                <td style="padding-top: 15px">
                                    <button onclick="deleteCart('${res[a].id}')" class="btn btn-danger btn-sm btn-icon"><i class="ri-delete-bin-5-line"></i></button>
                                </td>
                            </tr>
                            `
                        }
                        document.getElementById('cartTable').innerHTML = html
                        document.getElementById('totalHarga').innerText = rupiah(totalHarga)
                    }
                });
            }

            getCartTransaksi();

            function deleteCart(id) {
                $.ajax({
                    url: '{{ url('delete-cart') }}/' + id,
                    method: 'GET',
                    success: function (res) {
                        getCartTransaksi();
                    }
                });
            }

            function tambahLayanan() {
                let layanan_id = document.getElementById('layanan').value;

                $.ajaxSetup({
                    headers: {
                        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('tambahLayananCart') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        layanan_id: layanan_id
                    },
                    success: function (res) {
                        getCartTransaksi();
                    }
                });
            }

            function updateJumlah(id) {
                let url = `jumlah${id}`;
                let jumlah = document.getElementById(url).value;

                $.ajaxSetup({
                    headers: {
                        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('updateCountCart') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: id,
                        jumlah: jumlah
                    },
                    success: function (res) {
                        getCartTransaksi();
                    }
                });
            }

            function buatTransaksi() {
                let client = document.getElementById('client').value;
                let pembayaran = document.getElementById('pembayaran').value;
                let statusPembayaran = document.getElementById('statusPembayaran').value;
                let parfum = document.getElementById('parfum').value;

                if (client == '') {
                    Swal.fire({
                        html:'<div class="mt-3">' +
                            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px">' +
                            '</lord-icon><div class="mt-4 pt-2 fs-15">' +
                            '<h4>Peringatan !</h4>' +
                            '<p class="text-muted mx-4 mb-0">Silahkan memilih client</p></div></div>',
                        showCancelButton:!0,
                        showConfirmButton:!1,
                        cancelButtonClass:"btn btn-primary w-xs mb-1",
                        cancelButtonText:"OK",
                        buttonsStyling:!1,
                        showCloseButton:!0
                    });
                }

                if (pembayaran == '' || pembayaran == 'Pilih Pembayaran') {
                    Swal.fire({
                        html:'<div class="mt-3">' +
                            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px">' +
                            '</lord-icon><div class="mt-4 pt-2 fs-15">' +
                            '<h4>Peringatan !</h4>' +
                            '<p class="text-muted mx-4 mb-0">Silahkan memilih pembayaran</p></div></div>',
                        showCancelButton:!0,
                        showConfirmButton:!1,
                        cancelButtonClass:"btn btn-primary w-xs mb-1",
                        cancelButtonText:"OK",
                        buttonsStyling:!1,
                        showCloseButton:!0
                    });
                }

                if (statusPembayaran == '' || statusPembayaran == 'Pilih Status Pembayaran') {
                    Swal.fire({
                        html:'<div class="mt-3">' +
                            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px">' +
                            '</lord-icon><div class="mt-4 pt-2 fs-15">' +
                            '<h4>Peringatan !</h4>' +
                            '<p class="text-muted mx-4 mb-0">Silahkan memilih status pembayaran</p></div></div>',
                        showCancelButton:!0,
                        showConfirmButton:!1,
                        cancelButtonClass:"btn btn-primary w-xs mb-1",
                        cancelButtonText:"OK",
                        buttonsStyling:!1,
                        showCloseButton:!0
                    });
                }

                if (parfum == '' || parfum == 'Pilih Parfum') {
                    Swal.fire({
                        html:'<div class="mt-3">' +
                            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px">' +
                            '</lord-icon><div class="mt-4 pt-2 fs-15">' +
                            '<h4>Peringatan !</h4>' +
                            '<p class="text-muted mx-4 mb-0">Silahkan memilih parfum</p></div></div>',
                        showCancelButton:!0,
                        showConfirmButton:!1,
                        cancelButtonClass:"btn btn-primary w-xs mb-1",
                        cancelButtonText:"OK",
                        buttonsStyling:!1,
                        showCloseButton:!0
                    });
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('createTransaksi') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        client: client,
                        pembayaran: pembayaran,
                        statusPembayaran: statusPembayaran,
                        parfum: parfum
                    },
                    success: function (res) {
                        if (res.status == true) {
                            Swal.fire({
                                html:'<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Berhasil !</h4><p class="text-muted mx-4 mb-0">Transaksi berhasil dibuat</p></div></div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"OK",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            }).then(function (e) {
                                let order_number = res.data.order_number;
                                let url = 'detail-transaksi/' + order_number;
                                window.location.href = url;
                            });
                        } else {
                            Swal.fire({
                                html:'<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Gagal !</h4><p class="text-muted mx-4 mb-0">Transaksi Gagal dibuat</p></div></div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"OK",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            });
                        }
                    }
                });
            }

        </script>
    @endsection

@endsection
