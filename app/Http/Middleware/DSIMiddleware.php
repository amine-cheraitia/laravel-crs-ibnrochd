<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;


class DSIMiddleware
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
        if (Auth::check()) {
            $user = Auth::user();
            foreach ($user->roles as $role) {

                if ($role->nom == "admin") {
                    return $next($request);
                } else {
                    abort(403);
                }
            }
        }
        return redirect('/login');
    }
}