<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SaveGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // ---- this function take each and every request which is entering to our web----
    public function handle(Request $request, Closure $next)
    {
        // echo "this is what a middle ware do on every request";
        return $next($request);
    }
}
