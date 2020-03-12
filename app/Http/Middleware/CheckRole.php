<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        if (Auth::user()->role_id == 1) {
          return redirect(route('dashboard'));
        }
        elseif (Auth::user()->role_id == 2) {
          return redirect(route('driver_index'));
        }
        // elseif (Auth::user()->role_id ==3) {
        //   return redirect(route('index'));
        // }
        else {
          return redirect(abort(404));
        }
        return $next($request);
    }
}
