<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RestrictDriver
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
        if (Auth::user()->role_id ==2) {
          return $next($request);
        }
        else {
          return redirect(abort(404));
        }
    }
}
