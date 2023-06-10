<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function loginPost(LoginRequest $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');

        $httpHeader = [
          'noHp'        => $username,
          'password'    => $password
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('API_URL') . '/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($httpHeader),
            CURLOPT_HTTPHEADER => array(
                'authorized: ' . env('AUTHORIZED'),
                'Content-Type: application/json'
            ),
        ));

        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        if (is_object($response)) {
            if ($response->status == true) {
                Session::put('data_user', $response->data->user);
                Session::put('token', $response->data->token);
                Session::put('role', $response->data->user->hak_akses);
                Session::put('username', $username);

                return redirect()->action([HomeController::class, 'index']);
            } else {
                Log::error('Login Failed, ' . $response->message);
                Session::put('username', $username);
                Session::flash('error', 'Login gagal, No Hp atau Password Salah!');
                return back();
            }
        } else {
            Session::put('username', $username);
            Session::flash('error', 'Login gagal, No Hp atau Password Salah!');
            return back();
        }
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function registerPost(RegisterRequest $request)
    {
        $dataHttpReq = [
            'email'     => $request->post('email'),
            'name'      => $request->post('namaLaundry'),
            'password'  => $request->post('password'),
            'noHp'      => $request->post('noHp'),
            'hak_akses' => 'client',
            'status'    => 'inactive'
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('API_URL') . '/register',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => json_encode($dataHttpReq),
            CURLOPT_HTTPHEADER => array(
                'authorized: ' . env('AUTHORIZED'),
                'Content-Type: application/json'
            ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        if (is_object($response)) {
            if ($response->status == true) {
                Session::put('no', $request->post('noHp'));
                Session::put('otp', true);
                return redirect()->action([AuthController::class, 'verifikasiOTP']);
//                Session::flash('success', 'Register berhasil!, silahkan login');
//                return back();
            } else {
                Session::put('regEmail', $request->post('email'));
                Session::put('regNama', $request->post('namaLaundry'));
                Session::put('regNoHp', $request->post('noHp'));
                Session::flash('error', 'Register Gagal, Ulangi berberapa saat lagi');
                return back();
            }
        } else {
            Session::put('regEmail', $request->post('email'));
            Session::put('regNama', $request->post('namaLaundry'));
            Session::put('regNoHp', $request->post('noHp'));
            Session::flash('error', 'Register Gagal, Ulangi berberapa saat lagi');
            return back();
        }
    }

    public function lupaPassword(): View
    {
        return view('auth.lupa_password');
    }

    public function buatPasswordBaru(): View
    {
        return view('auth.new_password');
    }

    public function logout()
    {
        Session::forget('data_user');
        Session::forget('token');
        Session::forget('role');

        Session::forget('regEmail');
        Session::forget('regNama');
        Session::forget('regNoHp');
        return redirect()->action([AuthController::class, 'login']);
    }

    public function verifikasiOTP(): View
    {
        return view('auth.otp');
    }

    public function sendOTP(Request $request)
    {
        $dataHttpReq['noHp'] = $request->post('no');
        $dataHttpReq['otp'] = $request->post('angka1') + $request->post('angka2') + $request->post('angka3') +$request->post('angka4');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('API_URL') . '/otp',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($dataHttpReq),
            CURLOPT_HTTPHEADER => array(
                'authorized: ' . env('AUTHORIZED'),
                'Content-Type: application/json'
            ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        if (is_object($response)) {
            if ($response->status == true) {
                Session::flash('success', 'Verifikasi Akun berhasil, silahkan login');
                return back();
            } else {
                Session::flash('error', 'Verifikasi Akun gagal');
                return back();
            }
        } else {
            Session::flash('error', 'Verifikasi Akun gagal');
            return back();
        }
    }
}
