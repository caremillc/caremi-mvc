<?php 
namespace App\Http\Middleware;


use Careminate\Http\Middlewares\Contracts\MiddlewareInterface;


class SimpleMiddleware implements MiddlewareInterface
{
    public function handle($request, $next,...$role)
    {
        // dd($request);
        // dd($next);
        return $next($request);
    }
}