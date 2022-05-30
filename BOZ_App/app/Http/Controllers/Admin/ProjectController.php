<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Supports\Facades\DB;
use App\Models\Language;
use App\Models\UniqueNumber;
use App\Services\LocalizationService;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $projects = Project::where("language_id", $language)->get();
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

        $languages = Language::all();

        $uniqueNumber = new UniqueNumber();
        $uniqueNumber->save();

        foreach($languages as $language){
            $newProject = new Project();
            $newProject->number = $uniqueNumber->id;
            $newProject->title = $request->title;
            $newProject->content = $request->content;
            $newProject->language_id = $language->id;
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
        }

        return redirect()->route('project-edit', ["id" => $uniqueNumber->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $project = Project::where(["number" => $id, "language_id" =>$language])->first();
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
        
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $project = Project::where(["number" => $id, "language_id" =>$language])->first();

        $project->title = $request->title;
        $project->content = $request->content;

        if($request->secondTitle){
            $project->secondTitle = $request->secondTitle;
        }
        if($request->secondContent){
            $project->secondContent = $request->secondContent;
        }

        $project->save();

        foreach(Project::where("number", $project->number)->get() as $project){
            $project->media()->detach();
            if($request->media){
                $newMedia = Medium::whereIn('id',$request->media)->get();
                $project->media()->attach($newMedia);
                $project->save();
            }
        }
        
        return view("admin.projects.action", compact("project"));
    }

    public function removeMediaFromProject($projectNumber,$mediaId){
        $projects = Project::where("number",$projectNumber)->get();

        foreach($projects as $project){
            $project->media()->detach($mediaId);
            $project->save();
        }
        return redirect()->route('project-edit', $projectNumber);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $projects = Project::where("number",$id)->get();
        foreach($projects as $project){
            $project->media()->detach();
            $project->delete();
        }

        return redirect()->route("project");
    }
}
