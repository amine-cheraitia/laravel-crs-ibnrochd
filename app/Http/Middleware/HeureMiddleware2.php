<?php

namespace App\Http\Middleware;

use Closure;

class HeureMiddleware2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $heure)
    {;
        if (date('H:i') > date('H:i', strtotime($heure))) {
            return redirect('mnt');
        }
        return $next($request);
    }
}