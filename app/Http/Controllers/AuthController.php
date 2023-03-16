<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('comming_soon');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function signin(Request $request)
    {
        // Data Login
        $data['email'] = $request->post('email');
        $data['password'] = $request->post('password');

        $hit = apiPOST('login', $data);
        $response = json_decode($hit);

        if(is_object($response)) {
            if ($response->status == true) {
                Session::put('token', $response->data->token);
                Session::put('data_user', $response->data->user);

                return view('home');
            } else {
                Session::flash('error', $response->message);
                return redirect()->action([AuthController::class, 'login']);
            }
        }
    }
}
