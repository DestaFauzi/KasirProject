<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureKasir
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'kasir') {
            return $next($request);
        }

        return redirect('/')->withErrors(['access' => 'Anda tidak memiliki akses sebagai kasir.']);
    }
}
