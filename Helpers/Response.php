<?php


namespace Helpers;


class Response
{
    public static function response($message = 'Algo salió mal', $data = [], $success = false)
    {
        return print_r(json_encode(['success' => $success, 'data' => $data, 'message' => $message]));
    }
}