<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class userlogin
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
        if(Auth::guard('user')->check()){
            if(Auth::guard('user')->user()->email_verified_at == null){
                return redirect('user/login?alert=notverified');
            }else{
                return $next($request);
            }
            return $next($request);
        }else{
            return redirect('user/login?alert=warning');
        }

    }
}
