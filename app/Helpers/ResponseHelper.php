<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function jsonResponse($data = null, $message, $statusMessage, $errors = null, $statusCode = 200)
    {
        $statusCode = is_int($statusCode) ? $statusCode : 200;

        return response()->json([
            'data' => $data,
            'message' => $message,
            'statusMessage' => $statusMessage,
            'errors' => $errors,
            'timestamp' => now()->timestamp,
            'statusCode' => $statusCode
        ], $statusCode);
    }
}
