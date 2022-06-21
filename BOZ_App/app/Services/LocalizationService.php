<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LocalizationService
{
    private const Name = 'app_language';

    public static function setLocalCookie($local)
    {
        if (Session::has(self::Name)) {
            Session::forget(self::Name);
            Session::save();
        }

        Cookie::queue(Cookie::make(self::Name, $local, 87660/*2 Months*/));
    }
    public static function getLocalCookie()
    {
        return Cookie::get(self::Name);
    }
    public static function setLocalSession($local)
    {
        Session::forget(self::Name);
        Session::put(self::Name, $local);
        Session::save();
    }
    public static function getLocalSession()
    {
        return Session::get(self::Name);
    }

    public static function getLocal(Request $request): string
    {
        $local = 'nl';

        if (AllowCookiesService::isCookiesAllowed($request) && LocalizationService::getLocalCookie() != null) {
            $local = LocalizationService::getLocalCookie();
        } else if ((!AllowCookiesService::isCookiesAllowed($request)) && (LocalizationService::getLocalSession() != null)) {
            $local = LocalizationService::getLocalSession();
        } else if ($local == null || !isset($local) || $local == '') $local = 'nl';

        return $local;
    }
}
