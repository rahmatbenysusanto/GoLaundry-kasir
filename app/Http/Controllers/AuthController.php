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
          'email'       => $username,
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
            if ($response->status) {
                Session::put('data_user', $response->data->user);
                Session::put('token', $response->data->token);
                Session::put('role', $response->data->user->hak_akses);

                return redirect()->action([HomeController::class, 'index']);
            } else {
                Log::error('Login Failed, ' . $response->message);
                $this->responseNotData(false, 'Login Failed', 400);
            }
        } else {
            Log::error('Server Login tidak merespon request, Silahkan lakukan request ulang.');
            $this->responseNotData(false, 'Login Failed', 400);
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

        $response = curl_exec($curl);

        curl_close($curl);
        dd($response);
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
        return redirect()->action([AuthController::class, 'login']);
    }
}
