<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommendations = Recommendation::all();
        return view("admin.recommendations.index", compact(["recommendations"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.recommendations.action");
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
            "name" => 'required|string|max:255',
            "description" => 'required|string|max:255',
            "webLink" => 'required|string|max:255',
            "media_id" => 'nullable'
        ]);

        $newRecommendation = new Recommendation();
        $newRecommendation->name = $request->name;
        $newRecommendation->description = $request->description;
        $newRecommendation->webLink = $request->webLink;
        $newRecommendation->media_id = $request->media_id;

        $newRecommendation->save();

        return view("admin.recommendations.action",["recommendation" => $newRecommendation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recommendation = Recommendation::find($id);
        return view("admin.recommendations.action", compact("recommendation"));
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
            "name" => 'required|string|max:255',
            "description" => 'required|string|max:255',
            "webLink" => 'required|string|max:255',
            "media_id" => 'nullable'
        ]);

        $recommendation = Recommendation::find($id);

        $recommendation->name = $request->name;
        $recommendation->description = $request->description;
        $recommendation->webLink = $request->webLink;
        $recommendation->media_id = $request->media_id;

        $recommendation->save();

        return view("admin.recommendations.action",["recommendation" => $recommendation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $recommendation = Recommendation::Find($id);
        $recommendation->delete();

        return redirect()->route("recommendation");
    }
}
