<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AllowCookiesService
{
    private const COOKIENAME = "cookies_allowed";

    public static function isCookiesAllowed(Request $request): bool
    {
        $cookie = $request->cookie(Self::COOKIENAME);
        return $cookie == 'not_allowed' || !isset($cookie) ? false : true;
    }

    public static function setAllowedCookie(bool $boolValue): void
    {
        $value = $boolValue ? 'is_allowed' : "not_allowed";
        Cookie::queue(self::COOKIENAME,$value,87660);

    }

    public static function getAllowedCookie(Request $request)
    {
        return $request->cookie(Self::COOKIENAME);
    }
}
