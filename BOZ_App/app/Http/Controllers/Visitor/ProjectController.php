<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\LocalizationService;
use App\Models\Language;

class ProjectController extends Controller
{
    public function index() {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        return view('projects.index')->with(['projects' => Project::where("language_id", $language)->get()]);
    }

    public function detail($id) {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $project = Project::where(["number"=>$id, "language_id" => $language])->first();
        return view('projects.detail', compact("project"));
    }
}
