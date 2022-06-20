<?php

namespace App\Http\Controllers;

use App\Services\AllowCookiesService;
use Illuminate\Http\Request;
use App\Services\LocalizationService;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'lang' => 'required|string|exists:languages,code'
        ]);

        if (AllowCookiesService::isCookiesAllowed($request)) LocalizationService::setLocalCookie($request,$request->lang);
        else LocalizationService::setLocalSession($request->lang);

        return back();
    }
}
