<?php

namespace App\Http\Middleware;

use Closure;

class Murid
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
        if (auth()->user()->role == 'murid') {
            return $next($request);
        }
        return redirect('/login')->with('error', "You don't have Murid access.");
    }
}
