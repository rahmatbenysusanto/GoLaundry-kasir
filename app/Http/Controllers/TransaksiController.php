<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class TransaksiController extends Controller
{
    public function buatTransaksi(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiGET('layanan', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $layanan = $response->data;
        } else {
            $layanan = null;
        }

        $hit = hitApiGET('pembayaran', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $pembayaran = $response->data;
        } else {
            $pembayaran = null;
        }

        $hit = hitApiGET('parfums', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $parfum = $response->data;
        } else {
            $parfum = null;
        }

        $title = 'Buat Transaksi';
        return view('transaksi.buat_transaksi', compact('title', 'layanan', 'pembayaran', 'parfum'));
    }

    public function getClient()
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('clients', $dataHttpReq);
        $response = json_decode($hit);
        $client = $response->data;

        return $client;
    }

    public function getChartTransaksi()
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('carts', $dataHttpReq);
        $response = json_decode($hit);
        $cart = $response->data;

        return $cart;
    }

    public function deleteCart($id)
    {
        $hit = hitApiDELETE('cart/' . $id);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status == true) {
                return $response;
            } else {
                return $response;
            }
        } else {
            return $response;
        }
    }

    public function tambahLayanan(Request $request)
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $dataHttpReq['layanan_id'] = $request->post('layanan_id');

        $hit = hitApiPOST('cart', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status == true) {
                return $response;
            } else {
                return $response;
            }
        } else {
            return $response;
        }
    }

    public function updateCountCart(Request $request)
    {
        $dataHttpReq['count'] = $request->post('jumlah');
        $url = 'cart/' . $request->post('id');
        $hit = hitApiPATCH($url, $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status == true) {
                return $response;
            } else {
                return $response;
            }
        } else {
            return $response;
        }
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

    public function createTransaksi(Request $request)
    {
        $splitClient = explode(' - ',$request->post('client'));

        $dataHttpReq['nama_client'] = $splitClient[0];
        $dataHttpReq['noHp_client'] = $splitClient[1];
        $dataHttpReq['pembayaran_id'] = $request->post('pembayaran');
        $dataHttpReq['status_pembayaran'] = $request->post('statusPembayaran');
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $dataHttpReq['parfum_id'] = $request->post('parfum');

        $hit = hitApiPOST('order-create', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status == true) {
                return $response;
            } else {
                return $response;
            }
        } else {
            return $response;
        }
    }

    public function updateStatus($id)
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $dataHttpReq['id'] = $id;
        $url = 'order/' . $id;

        $hit = hitApiPATCH($url, $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status ==  true) {
                Session::flash('success', 'Berhasil update status transaksi');
                return back();
            } else {
                Session::flash('error', 'Gagal update status transaksi');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal update status transaksi');
            return back();
        }
    }
}
