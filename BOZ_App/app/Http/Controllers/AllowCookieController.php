<?php

namespace App\Http\Controllers;

use App\Services\AllowCookiesService;
use Illuminate\Http\Request;

class AllowCookieController extends Controller
{
    public function allow()
    {
        AllowCookiesService::setAllowedCookie(true);
        return back();
    }
    public function decline()
    {
        AllowCookiesService::setAllowedCookie(false);
        return back();
    }
}
