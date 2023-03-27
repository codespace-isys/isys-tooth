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
        }

        return redirect()->back()->with('error', "Anda tidak memiliki akses ini");
    }
}
