<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserLog
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
        if (Auth::user() ==''){
            Auth::logout();
            return redirect('login');
        }
        return $next($request);
    }
}
