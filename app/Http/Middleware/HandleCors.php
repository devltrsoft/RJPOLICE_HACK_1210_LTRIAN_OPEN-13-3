<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Modify the response or perform additional logic if needed

        // Ensure that the response is an instance of Symfony\Component\HttpFoundation\Response
        if (!$response instanceof Response) {
            // If it's not, you can create a new response or modify the existing one
            $response = new Response($response);
        }

        return $response;
        }
}
