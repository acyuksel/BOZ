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
        $projects = Project::all();
        return view("admin.projects.index", compact(["projects"]));
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
        $request->validate( [
            "title" => 'required|string|max:255',
            "content" => 'required|string',
            "secondTitle" => 'nullable|string|max:255',
            "secondContent" => 'nullable|string',
            "media.*" => "nullable"
        ]);

        $newProject = new Project();
        $newProject->title = $request->title;
        $newProject->content = $request->content;

        if($request->secondTitle){
            $newProject->secondTitle = $request->secondTitle;
        }
        if($request->secondContent){
            $newProject->secondContent = $request->secondContent;
        }

        $newProject->save();

        if($request->media){
            $newMedia = Medium::whereIn('id',$request->media)->get();
            $newProject->media()->attach($newMedia);
        }

        return view("admin.projects.action",["project" => $newProject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view("admin.projects.action", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate( [
            "title" => 'required|string|max:255',
            "content" => 'required|string',
            "secondTitle" => 'nullable|string|max:255',
            "secondContent" => 'nullable|string',
            "media.*" => "nullable"
        ]);

        $project = Project::find($id);

        $project->title = $request->title;
        $project->content = $request->content;

        if($request->secondTitle){
            $project->secondTitle = $request->secondTitle;
        }
        if($request->secondContent){
            $project->secondContent = $request->secondContent;
        }

        $project->media()->detach();
        if($request->media){
            $newMedia = Medium::whereIn('id',$request->media)->get();
            $project->media()->attach($newMedia);
        }

        $project->save();

        return view("admin.projects.action",["project" => $project]);
    }

    public function removeMediaFromProject($projectId,$mediaId){
        $project = Project::find($projectId);

        $project->media()->detach($mediaId);

        $project->save();
        
        return redirect()->route('project-edit', $projectId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $project = Project::Find($id);
        $project->media()->detach();
        $project->delete();

        return redirect()->route("project");
    }
}
