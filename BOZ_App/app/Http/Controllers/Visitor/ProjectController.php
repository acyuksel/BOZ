<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\LocalizationService;
use App\Models\Language;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $language = Language::where("code", LocalizationService::getLocal($request))->first()->id;
        return view('projects.index')->with(['projects' => Project::where("language_id", $language)->get()]);
    }

    public function detail(Request $request, $id)
    {
        $language = Language::where("code", LocalizationService::getLocal($request))->first()->id;
        $project = Project::where(["number" => $id, "language_id" => $language])->first();
        return view('projects.detail', compact("project"));
    }
}
