<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()) {
            if(Admin::where('user_id', Auth::id())->count() > 0) {
                return $next($request);
            }
        }
    }
}
