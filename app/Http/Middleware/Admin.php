<?php

namespace Comunicados\Http\Middleware;

use Iluminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
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

        return $next($request);
    }
}
