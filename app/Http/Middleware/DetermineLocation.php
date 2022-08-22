<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetermineLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Perform some super critical logic to set location.
        session([
            'location' => 1
        ]);
        return $next($request);
    }
}
