<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Services\LocalizationService;
use App\Models\Language;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $language = Language::where("code", LocalizationService::getLocal($request))->first()->id;
        return view('partners.index')->with(['Partners' => Partner::where("language_id", $language)->get()]);
    }
}
