<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDoctor
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role_id == 2) {
            return $next($request);
        }else{
            return redirect()->route('login')->with('error-doctor', "You don't Have This Access");
        }
    }
}
