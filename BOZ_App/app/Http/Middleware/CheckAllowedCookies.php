<?php

namespace App\Http\Middleware;

use App\Services\AllowCookiesService;
use Closure;
use Illuminate\Http\Request;

class CheckAllowedCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(AllowCookiesService::getAllowedCookie() == null){
            AllowCookiesService::setAllowedCookie();
        }else if(){

        }
        return $next($request);
    }
}
