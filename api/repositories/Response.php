<?php

namespace Repositories;

abstract class Response
{
    /**
     * return [
     *   'success': true|false,]
     *   'code': http_status_code
     *   'messages': [] // Por exemplo, os erros
     *   'data': [] // resultado de buscas
     * ]
     */
    private static $instance;

    private static $response;
    private static $success;
    private static $code;
    private static $messages;
    private static $data;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance))
            self::$instance = new self;

        return self::$instance;
    }

    public static function success($data = [], $messages = [], $code = 200)
    {
        self::$success = true;
        self::$code = $code;
        self::$messages = $messages;
        self::$data = $data;

        return self::create();
    }

    public static function error($data = [], $messages = [], $code = 400)
    {
        self::$success = false;
        self::$code = $code;
        self::$messages = $messages;
        self::$data = $data;

        return self::create();
    }

    private static function create()
    {
        self::$response = [
            'success' => self::$success,
            'code' => self::$code,
            'messages' => self::$messages,
            'data' => self::$data
        ];

        return self::$response;
    }
}
