<?php

namespace App\Http\Middleware;

use Closure;

class VerifyCustomer
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
        if(session()->get('type')=='2'){
             return $next($request);
        }else{
            return redirect()->route('login.index');
        }
    }
}
