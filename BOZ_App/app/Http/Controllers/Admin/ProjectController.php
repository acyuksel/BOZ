<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Supports\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.projects.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.action");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProject = new Project;
        $newProject->title = 'Eerste project';
        $newProject->content = 'Dit is een test voor het eerste project';

        $newProject->save();

        return redirect()->route("project");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view("admin.projects.action", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            "title" => 'required|string|max:255',
            "content" => 'required|string',
            "secondTitle" => 'string|max:255',
            "secondContent" => 'string',
            "media.*" => "integer|exists:media,id"
        ]);

        if($validator->fails()) return view("admin.projects.create",["project" => $project]);

        $project->update($request->attributes());
        $project->media()->delete();
        $newMedia = Medium::whereIn('id',$request->media)->get();
        $project->media()->attach($newMedia);
        $project->save();

        return view("admin.projects.create",["project" => $project]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $projectToDelete = Project::Find($id);
        if ($projectToDelete != null){
            $projectToDelete->delete();
        }

        return redirect()->route("project");
    }
}
