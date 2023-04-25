<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role_id == 3) {
            return $next($request);
        }else{
            return redirect()->route('login')->with('error-user', "You don't Have This Access");
        }
    }
}
