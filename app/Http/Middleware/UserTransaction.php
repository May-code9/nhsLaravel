<?php

namespace App\Http\Middleware;

use Closure;
use App\Transaction;
use Auth;

class UserTransaction
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
            $getAuth = Transaction::where('user_id', Auth::id())->count();
            if($getAuth == 0) {
                return $next($request);
            }
            else {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }

    }
}
