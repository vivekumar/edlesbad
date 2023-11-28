<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        //custom code
        if (!$request->expectsJson()) {

            if (Route::is('admin.*')) {
                return route('admin.login');
            }

            return route('login');
        } //end custom code

        //return $request->expectsJson() ? null : route('login'); //laravel default code
    }
}
