<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class role
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
        if(Auth::user()->role != 'admin'){
            return redirect('/');
        }

//        if (!Auth::check() || Auth::user()->role!=='admin')
//        {
//            return redirect('/');
//        }
        return $next($request);
    }
}
