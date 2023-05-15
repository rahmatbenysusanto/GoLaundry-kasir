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
}
