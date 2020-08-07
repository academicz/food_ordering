<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Checking Admin Authentication
         */
        if (Auth::check()) {
            if (Auth::user()->user_type_id != 0)
                return redirect()->route('adminLogin');
        } elseif (!Auth::check()) {
            return redirect()->route('adminLogin');
        }
        return $next($request);
    }
}
