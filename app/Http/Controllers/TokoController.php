<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class TokoController extends Controller
{
    public function layanan(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiGET('layanan', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $layanan = $response->data;
        } else {
            $layanan = null;
        }

        $title = 'Layanan';
        return view('toko.layanan', compact('title', 'layanan'));
    }

    public function tambahLayanan(Request $request)
    {
        $dataHttpReq['nama_layanan'] = $request->post('nama');
        $dataHttpReq['harga'] = $request->post('harga');
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiPOST('layanan', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menambahkan Layanan.');
                return back();
            } else {
                Session::flash('error', 'Gagal menambahkan Layanan.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menambahkan Layanan.');
            return back();
        }
    }

    public function deleteLayanan($id)
    {
        $hit = hitApiDELETE('layanan/' . $id);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menghapus Layanan.');
                return back();
            } else {
                Session::flash('error', 'Gagal menghapus Layanan.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menghapus Layanan.');
            return back();
        }
    }

    public function diskon(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiGET('diskon', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $diskon = $response->data;
        } else {
            $diskon = null;
        }

        $title = 'Diskon';
        return view('toko.diskon', compact('title', 'diskon'));
    }

    public function tambahDiskon(Request $request)
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $dataHttpReq['nama_diskon'] = $request->post('nama');
        $dataHttpReq['jenis_diskon'] = $request->post('jenis');
        $dataHttpReq['jumlah_diskon'] = $request->post('jumlah');

        $hit = hitApiPOST('diskon', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menambahkan Diskon.');
                return back();
            } else {
                Session::flash('error', 'Gagal menambahkan Diskon.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menambahkan Diskon.');
            return back();
        }
    }

    public function deleteDiskon($id)
    {
        $url = 'diskon/' . $id;

        $hit = hitApiDELETE($url);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menghapus Diskon.');
                return back();
            } else {
                Session::flash('error', 'Gagal menghapus Diskon.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menghapus Diskon.');
            return back();
        }
    }

    public function parfum(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiGET('parfums', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $parfum = $response->data;
        } else {
            $parfum = null;
        }

        $title = 'Parfum';
        return view('toko.parfum', compact('title', 'parfum'));
    }

    public function tambahParfum(Request $request)
    {
        $dataHttpReq['nama_parfum'] = $request->post('nama');
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiPOST('parfum', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menambahkan Parfum.');
                return back();
            } else {
                Session::flash('error', 'Gagal menambahkan Parfum.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menambahkan Parfum.');
            return back();
        }
    }

    public function deleteParfum($id)
    {
        $hit = hitApiDELETE('parfum/' . $id);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menghapus Parfum.');
                return back();
            } else {
                Session::flash('error', 'Gagal menghapus Parfum.');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menghapus Parfum.');
            return back();
        }
    }

    public function laporan(): View
    {
        $title = 'Laporan';
        return view('toko.laporan', compact('title'));
    }

    public function karyawan(): View
    {
        $title = 'Karyawan';
        return view('toko.karyawan', compact('title'));
    }

    public function pengaturan(): View
    {
        $title = 'Pengaturan';
        return view('toko.pengaturan', compact('title'));
    }

    public function pembayaran() :View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('pembayaran', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $pembayaran = $response->data;
        } else {
            $pembayaran = null;
        }

        $title = 'Pembayaran';
        return view('toko.pembayaran', compact('title', 'pembayaran'));
    }

    public function tambahPembayaran(Request $request)
    {
        $dataHttpReq['pembayaran'] = $request->post('pembayaran');
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit = hitApiPOST('pembayaran', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Berhasil menambahkan pembayaran');
                return back();
            } else {
                Session::flash('error', 'Gagal menambahkan pembayaran');
                return back();
            }
        } else {
            Session::flash('error', 'Gagal menambahkan pembayaran');
            return back();
        }
    }
}
