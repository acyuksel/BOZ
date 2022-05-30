<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LocalizationService;

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

        LocalizationService::setLocal($request->lang);
        return redirect()->back();
    }
}
