<?php

namespace App\Services;

use Illuminate\Support\Facades\Cookie;

class LocalizationService
{
    public static function setLocal($local){
        Cookie::queue(Cookie::make('app_language', $local, 87660/*2 Months*/));
    }

    public static function getLocal(){
        return Cookie::get('app_language');
    }
}
