<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class AllowCookiesService
{
    private const COOKIENAME = "cookies_allowed";

    private const CACHEKEY = "cookieResetTimestamp";

    public static function isCookiesAllowed(Request $request): bool
    {
        $cookie = $request->cookie(Self::COOKIENAME);
        return $cookie == 'not_allowed' . Carbon::now() || !isset($cookie) ? false : true;
    }

    public static function setAllowedCookie(bool $boolValue): void
    {
        $value = $boolValue ? 'is_allowed|' . Carbon::now() : "not_allowed|" . Carbon::now();
        Cookie::queue(self::COOKIENAME, $value, 87660);
    }

    public static function getAllowedCookie(Request $request)
    {
        $cookie = $request->cookie(Self::COOKIENAME);

        if ($cookie != null && !self::checkCookieStillValid($cookie)) {
            Cookie::queue(Cookie::forget(self::COOKIENAME));
            $cookie = null;
        }

        return $cookie;
    }

    private static function checkCookieStillValid($cookie): bool
    {
        if (!Cache::has(self::CACHEKEY)) {
            return true;
        }

        $date = explode('|', $cookie)[1];
        $cookieDate = Carbon::parse($date);
        $resetDate = Carbon::parse(Cache::get(self::CACHEKEY));

        return $resetDate->lte($cookieDate);
    }

    public static function resetAllowedCookie($resetDate)
    {
        Cache::put(self::CACHEKEY,  $resetDate);
    }
}
