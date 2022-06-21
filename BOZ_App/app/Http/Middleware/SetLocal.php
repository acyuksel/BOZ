<?php

namespace App\Http\Middleware;

use App\Services\AllowCookiesService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use App\Services\LocalizationService;

class SetLocal
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

        if (AllowCookiesService::isCookiesAllowed($request) && LocalizationService::getLocalCookie() == null) {
            LocalizationService::setLocalCookie('nl');
        } else if ((!AllowCookiesService::isCookiesAllowed($request)) && (LocalizationService::getLocalSession() == null)) {
            LocalizationService::setLocalSession('nl');
        }

        App::setLocale(LocalizationService::getLocal($request));

        return $next($request);
    }
}
