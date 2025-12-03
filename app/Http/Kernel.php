<?php declare(strict_types=1);
namespace App\Http;

use App\Http\Middleware\SimpleMiddleware;

class Kernel
{

     public static $globalWeb = [
        \Careminate\Sessions\Session::class,
        \Careminate\Http\Middlewares\CSRFToken::class
    ];

    public static $middlewareWebRoute = [
        'middleware' => \App\Http\Middleware\SimpleMiddleware::class,
    ];

    public static $middlewareApiRoute = [];

    public static $globalApi = [];
}
