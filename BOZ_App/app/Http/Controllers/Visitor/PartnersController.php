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
    public function index()
    {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        return view('Partners.index')->with(['Partners' => Partner::where("language_id", $language)->get()]);
    }


}
