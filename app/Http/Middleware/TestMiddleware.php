<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$x=$next($request);
        echo "test debut";
        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo " fin du test";
    }
}