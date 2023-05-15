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
        $title = 'Diskon';
        return view('toko.diskon', compact('title'));
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
}
