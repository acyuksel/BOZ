<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;

class TextSizeController extends Controller
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
            'size' => ['required', 'string', Rule::in(['md', 'l', 'xl'])]
        ]);

        Cookie::queue(Cookie::make('app_textsize', $request->size, 87660/*2 Months*/));

        return redirect()->back();
    }
}
