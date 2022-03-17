<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
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

        return redirect()->route("project");
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
        $project = Project::find($id);
        $project->title = $request->title;
        $project->content = $request->content;

        if($request->secondTitle){
            $project->secondTitle = $request->secondTitle;
        }
        if($request->secondContent){
            $project->secondContent = $request->secondContent;
        }

        $project->save();

        return redirect()->route("project");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::Find($id)->delete();

        return redirect()->route("project");
    }
}
