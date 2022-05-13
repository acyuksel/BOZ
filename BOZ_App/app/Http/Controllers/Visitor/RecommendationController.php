<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index() {
        return view('recommendations.index')->with(['recommendations' => Recommendation::all()]);
    }
}
