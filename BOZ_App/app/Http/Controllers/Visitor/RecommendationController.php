<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use App\Services\LocalizationService;
use App\Models\Language;

class RecommendationController extends Controller
{
    public function index() {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        return view('recommendations.index')->with(['recommendations' => Recommendation::where("language_id", $language)->get()]);
    }
}
