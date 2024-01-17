<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('police_id')) {
            // Redirect to the dashboard or another route as needed           
            return $next($request);
        } else {
            // Return a view
            return redirect('/register');
        }
    }
}
