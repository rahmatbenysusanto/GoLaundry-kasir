<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class TransaksiController extends Controller
{
    public function buatTransaksi(): View
    {
        $title = 'Buat Transaksi';
        return view('transaksi.buat_transaksi', compact('title'));
    }

    public function daftarTransaksi(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('orders', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $order = $response->data;
        } else {
            $order = null;
        }

        $title = 'Daftar Transaksi';
        return view('transaksi.daftar_transaksi', compact('title', 'order'));
    }

    public function detailTransaksi($id)
    {
        try {
            $id = base64_decode($id);
            $hit = hitApiGET('order/' . $id, ['user_id' => Session::get('data_user')->id]);
            $response = json_decode($hit);

            if (is_object($response)) {
                $order = $response->data->order;
                $layanan = $response->data->layanan;
            } else {
                $order = null;
                $layanan = null;
            }

            $title = 'Daftar Transaksi';
            return view('transaksi.detail_transaksi', compact('title', 'order', 'layanan'));
        } catch (\Exception $err) {
            Session::flash('error', 'Transaksi tidak diketahui');
            return back();
        }
    }

    public function historyTransaksi(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('order-history', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $order = $response->data;
        } else {
            $order = null;
        }

        $title = 'History Transaksi';
        return view('transaksi.history_transaksi', compact('title', 'order'));
    }
}
