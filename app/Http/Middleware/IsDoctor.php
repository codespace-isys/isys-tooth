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
        }

        return redirect()->back()->with('error', "Anda tidak memiliki akses ini");
    }
}
