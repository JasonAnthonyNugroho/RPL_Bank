<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SessionAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::get('isLoggedIn')) {
            return redirect()->route('LoginAdmin');
        }
        return $next($request);
    }
}
