<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Closure;

class WebGuard
{
    public function handle($request, Closure $next)
    {
        // return $next($request);
        // $user = Auth::user();

        if (session()->has('id')) {
            return $next($request);
        } elseif ($request->method() == 'GET' && $request->path() == 'login') {
            //--------- custom log for mantaining the user info for requesting an unauthorized request or URL--------
            Log::channel('customlog')->info(' Authorized|allowed Page request from ip:: ' . $_SERVER['REMOTE_ADDR'] . '   --- At Time:: ' . Carbon::now());
            return $next($request);
        } else {
            //--------- custom log for mantaining the user info for requesting an unauthorized request or URL--------
            Log::channel('customlog')->info(' unauthorized Page request from ip:: ' . $_SERVER['REMOTE_ADDR'] . '   --- At Time:: ' . Carbon::now());
            // abort(403, 'Unauthorized');
            return redirect('/login');
        }
    }
}
