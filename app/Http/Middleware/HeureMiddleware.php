<?php

namespace App\Http\Middleware;

use Closure;

class HeureMiddleware
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
        if (date('H:i') > date('H:i', strtotime('23:00')) && date('H:i') < date('H:i', strtotime('23:59'))) {
            return redirect('mnt');
        }
        return $next($request);
    }
}