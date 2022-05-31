<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use App\Models\Recommendation;
use App\Rules\RecommendationMediaIsPicture;
use App\Rules\WebLinkIsLink;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\UniqueNumber;
use App\Services\LocalizationService;

class RecommendationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $recommendations = Recommendation::where("language_id", $language)->get();
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
            "webLink" => 'nullable|string|max:255|url',
            "media_id" => ['nullable', new RecommendationMediaIsPicture]
        ]);

        $languages = Language::all();

        $uniqueNumber = new UniqueNumber();
        $uniqueNumber->save();

        foreach ($languages as $language) {
            $newRecommendation = new Recommendation();
            $newRecommendation->number = $uniqueNumber->id;
            $newRecommendation->name = $request->name;
            $newRecommendation->description = $request->description;
            $newRecommendation->language_id = $language->id;
            $newRecommendation->webLink = $request->webLink;
            $newRecommendation->media_id = $request->media_id;

            $newRecommendation->save();
        }
        return redirect()->route('recommendation-edit', ["id" => $uniqueNumber->id]);
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
        $recommendation = Recommendation::where(["number" => $id, "language_id" =>$language])->first();
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
            "webLink" => 'nullable|string|max:255|url',
            "media_id" => ['nullable', new RecommendationMediaIsPicture]
        ]);

        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $recommendation = Recommendation::where(["number" => $id, "language_id" =>$language])->first();

        $recommendation->name = $request->name;
        $recommendation->description = $request->description;
        $recommendation->webLink = $request->webLink;

        $recommendation->save();

        foreach(Recommendation::where("number", $recommendation->number)->get() as $recommendation){
            $recommendation->media_id = $request->media_id;
            $recommendation->save();
        }

        return redirect()->route('recommendation-edit', ["id" => $recommendation->number]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $recommendations = Recommendation::where("number",$id)->get();
        foreach($recommendations as $recommendation){
            $recommendation->delete();
        }

        return redirect()->route("recommendation");
    }
}
