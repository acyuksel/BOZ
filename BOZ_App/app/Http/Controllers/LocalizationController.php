<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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

        Cookie::queue(Cookie::make('app_language', $request->lang, 87660/*2 Months*/));
        return redirect()->back();
    }
}
