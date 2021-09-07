<?php

namespace App\Http\Middleware;
use App;
use Closure;

class VerifyAPIAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->ip() != "92.205.13.119") {
                dd(11111111111111111);
            }

        return $next($request);
    }
}
