<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role_id == 1) {
            return $next($request);
        }else{
            return redirect()->route('login')->with('error-admin', "You don't Have This Access");
        }
    }
}
