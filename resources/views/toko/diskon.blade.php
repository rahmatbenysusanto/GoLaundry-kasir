@extends('layout')
@section('title', 'Daftar Diskon')
@section('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

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

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Daftar Diskon Laundry</h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-success add-btn mb-3" data-bs-toggle="modal" data-bs-target="#tambahdiskon">
                        <i class="ri-add-line align-bottom me-1"></i> Tambah Diskon
                    </button>
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Diskon</th>
                            <th>Jenis Diskon</th>
                            <th>Jumlah Diskon</th>
                            <th>Jumlah Diskon Dipakai</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($diskon as $ly)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ly->nama_diskon }}</td>
                                <td>{{ $ly->jenis_diskon }}</td>
                                <td>
                                    @if($ly->jenis_diskon == 'persen')
                                        {{ $ly->jumlah_diskon }}%
                                    @else
                                        {{ rupiahFormat($ly->jumlah_diskon) }}
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div class="edit">
                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                        </div>
                                        <div class="remove">
                                            <a onclick="deleteDiskon('{{ $ly->id }}')" class="hapus{{ $ly->id }} btn btn-sm btn-danger remove-item-btn">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahdiskon" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Tambah Diskon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambahDiskon') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Diskon</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Diskon">
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Diskon</label>
                            <select class="form-select" name="jenis">
                                <option value="persen">Persen (%)</option>
                                <option value="nominal">Nominal (Rp)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Diskon</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Diskon">
                        </div>
                        <div class="mb-3">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @section('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <!--Swiper slider js-->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

        <!-- multi.js -->
        <script src="{{ asset('assets/libs/multi.js/multi.min.js') }}"></script>
        <!-- autocomplete js -->
        <script src="{{ asset('assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

        <script>
            function deleteDiskon(id) {
                Swal.fire({html:'<div class="mt-3">' +
                        '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
                        '<div class="mt-4 pt-2 fs-15 mx-5">' +
                        '<h4>Apakah Anda Yakin ?</h4>' +
                        '<p class="text-muted mx-4 mb-0">Apakah anda yakin ingin menghapus diskon ini ?</p>' +
                        '</div>' +
                        '</div>',
                    showCancelButton:!0,
                    confirmButtonClass:"btn btn-primary w-xs me-2 mb-1",
                    confirmButtonText:"Ya, Hapus diskon",
                    cancelButtonClass:"btn btn-danger w-xs mb-1",
                    cancelButtonText:"Tidak",
                    buttonsStyling:!1,
                    showCloseButton:!0
                }).then(function (e) {
                    if (e.value) {
                        window.location.href = `hapus-diskon/${id}`;
                    }
                });
            }
        </script>
    @endsection

@endsection
