<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class CheckRegister
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
        $curent_date = Carbon::now()->day;
        if ($curent_date >= 1 && $curent_date <= 10) {
            return $next($request);
        }
        return abort(403);
    }
}
