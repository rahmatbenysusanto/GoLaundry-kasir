<?php

function apiGET($url, $req) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'localhost:8080/' . $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'authorization: ' . Session::get('data_user')->token,
            'authorized: ' . env('API_KEY')
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function apiPOST($url, $req) {
    if(Session::get('data_user')) {
        $token = Session::get('token');
    }else{
        $token = null;
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'localhost:8080/' . $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($req),
        CURLOPT_HTTPHEADER => array(
            'authorization: ' . $token,
            'authorized: ' . env('API_KEY'),
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function apiPATCH($url, $req) {

}

function apiDELETE($url, $req) {

}
