<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function responseWithData($status, $message, $data, $httpResponseCode)
    {
        return response()->json([
            'status'    => $status,
            'message'   => $message,
            'data'      => $data
        ], $httpResponseCode);
    }

    public function responseNotData($status, $message, $httpResponseCode)
    {
        return response()->json([
            'status'    => $status,
            'message'   => $message,
        ], $httpResponseCode);
    }
}
