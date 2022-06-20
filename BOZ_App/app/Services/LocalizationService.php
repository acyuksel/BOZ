<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LocalizationService
{
    private const SESSIONNAME ='app_language';

    public static function setLocalCookie($local)
    {
        Cookie::queue(Cookie::make(self::SESSIONNAME, $local, 87660/*2 Months*/));
    }
    public static function getLocalCookie()
    {
        return Cookie::get(self::SESSIONNAME);
    }
    public static function setLocalSession($local)
    {
        Session::forget(self::SESSIONNAME);
        Session::put(self::SESSIONNAME,$local);
        Session::save();
    }
    public static function getLocalSession()
    {
        return Session::get(self::SESSIONNAME);
    }

    public static function getLocal(Request $request)
    {
        $local = 'nl';
        if(AllowCookiesService::isCookiesAllowed($request)) $local = LocalizationService::getLocalCookie();
        else $local = LocalizationService::getLocalSession();

        return $local;
    }
}
