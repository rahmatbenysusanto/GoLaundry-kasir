<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function daftarClient(): View
    {
        $dataHttpReq['user_id'] = Session::get('data_user')->id;
        $hit = hitApiGET('clients', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            $client = $response->data;
        } else {
            $client = null;
        }

        $title = 'Daftar Client';
        return view('client.daftar_client', compact('title', 'client'));
    }

    public function tambahClient(Request $request)
    {
        $dataHttpReq['name'] = $request->post('nama');
        $dataHttpReq['noHp'] = $request->post('noHp');
        $dataHttpReq['user_id'] = Session::get('data_user')->id;

        $hit =hitApiPOST('client', $dataHttpReq);
        $response = json_decode($hit);

        if (is_object($response)) {
            if ($response->status) {
                Session::flash('success', 'Pelanggan baru berhasil ditambahkan');
                return back();
            } else {
                Session::flash('error', 'Pelanggan gagal berhasil ditambahkan');
                return back();
            }
        } else {
            Session::flash('error', 'Pelanggan gagal berhasil ditambahkan');
            return back();
        }
    }
}
