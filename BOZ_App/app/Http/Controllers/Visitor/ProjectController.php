<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('projects.index')->with(['projects' => Project::all()]);
    }

    public function detail(Project $project) {
        return view('projects.detail', $project);
    }
}
