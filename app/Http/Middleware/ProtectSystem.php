<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProtectSystem {


    public function handle($request, Closure $next)
    {
        if(!$request->is('/login') && \Auth::guard('accounts')->user()->accessLevel <> 7) {
            return redirect('/login');
        }
        return $next($request);
    }

}