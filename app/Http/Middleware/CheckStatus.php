<?php

namespace App\Http\Middleware;

use Closure;

class CheckStatus
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
        $date = date('Y-m-d');
        if ((auth()->user()->status == 'active') && (auth()->user()->expired >= $date)) {
            return $next($request);
        }
        return response()->json('Your account is inactive');
    }
}
