<?php

namespace App\Http\Middleware;

use Closure;

class WebGuard
{
    public function handle($request, Closure $next)
    {
        // return $next($request);
        if (session()->has('id')) {
            return $next($request);
        } elseif ($request->method() == 'GET' && $request->path() == 'login') {
            return $next($request);
        } else {
            abort(403, 'Unauthorized');
        }
    }
}
