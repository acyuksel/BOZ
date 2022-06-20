<?php

namespace App\Services;

use Illuminate\Support\Facades\Cookie;

class AllowCookiesService
{
    public static function isCookiesAllowed(): bool
    {
        return filter_var(Cookie::get('cookies_allowed'), FILTER_VALIDATE_BOOL);
    }

    public static function setAllowedCookie(bool $newValue = false): void
    {
        Cookie::queue(Cookie::make('cookies_allowed', $newValue, 87660/*2 Months*/));
    }

    public static function getAllowedCookie()
    {
        return Cookie::get('cookies_allowed');
    }
}
