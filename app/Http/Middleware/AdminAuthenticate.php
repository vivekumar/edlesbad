<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        // if (Auth::guard('admin')->check()) {
        // } else {
        //     Auth::logout();
        //     return redirect('admin/login')->with('msg', 'Please login here..');
        // }
        if (Auth::guard($guard)->check()) {

            if ($guard == "admin") {
                //user was authenticated with admin guard.
                return redirect()->route('admin.dashboard');
            } else {
                //default guard.
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}
