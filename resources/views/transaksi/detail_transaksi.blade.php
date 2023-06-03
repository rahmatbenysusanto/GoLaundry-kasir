@extends('layout')
@section('title', 'Detail Transaksi')

@section('konten')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Detail Transaksi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <table>
                                <tr>
                                    <td class="fw-semibold">Nomor Transaksi Laundry</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->order_number }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Nama Client</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->client->name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Nomor HP</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->client->noHp }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Harga</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ rupiahFormat($order->price) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Total Diskon</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ rupiahFormat($order->total_diskon) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Total Harga</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ rupiahFormat($order->total_harga) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Pembayaran</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->pembayaran->pembayaran }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Status Pembayaran</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">
                                        @if($order->status_pembayaran == '1')
                                            <span class="badge badge-soft-success">Lunas</span>
                                        @else
                                            <span class="badge badge-soft-danger">Belum Bayar</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tr>
                                    <td class="fw-semibold">Diskon</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->diskon->nama_diskon }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Parfum</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ $order->parfum->nama_parfum }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Tanggal Masuk</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">{{ tanggal_indo($order->createdAt) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Tanggal Keluar</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">
                                        @if($order->status != 'diambil')
                                            -
                                        @else
                                            {{ tanggal_indo($order->updatedAt) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Status Laundry</td>
                                    <td class="fw-semibold ps-2">:</td>
                                    <td class="fw-normal ps-2">
                                        @if($order->status == 'new')
                                            <span class="badge bg-info">Baru</span>
                                        @elseif($order->status == 'proses')
                                            <span class="badge bg-primary">Di Proses</span>
                                        @elseif($order->status == 'selesai')
                                            <span class="badge bg-success">Selesai</span>
                                        @else
                                            <span class="badge bg-warning">Pesanan Diambil</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <div>
                                @if($order->status == 'new')
                                    <a href="/update-status/{{ $order->id }}" class="btn btn-primary">Laundry Diproses</a>
                                @elseif($order->status == 'proses')
                                    <a href="/update-status/{{ $order->id }}" class="btn btn-primary">Laundry Selesai</a>
                                @elseif($order->status == 'selesai')
                                    <a href="/update-status/{{ $order->id }}" class="btn btn-primary">Laundry Diambil</a>
                                @endif
                                <div class="dropdown mt-4">
                                    <a href="#" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cetak Nota Transaksi
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Nota Laundry</a>
                                        <a class="dropdown-item" href="#">Nota Client</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Detail Layanan</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($layanan as $ly)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $ly->nama_layanan }}</td>
                                    <td>{{ rupiahFormat($ly->harga) }}</td>
                                    <td>{{ $ly->count }}</td>
                                    <td>{{ rupiahFormat($ly->price) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
