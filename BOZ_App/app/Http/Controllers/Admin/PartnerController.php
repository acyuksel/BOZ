<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Rules\RecommendationMediaIsPicture;
use App\Models\Language;
use App\Models\UniqueNumber;
use App\Services\LocalizationService;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $partners = Partner::where("language_id", $language)->get();
        return view("admin.partners.index", compact(["partners"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partners.action");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required|string|max:255',
            "description" => 'required|string|max:255',
            "webLink" => 'nullable|string|max:255|url',
            "media_id" => ['nullable', new RecommendationMediaIsPicture]
        ]);

        $languages = Language::all();

        $uniqueNumber = new UniqueNumber();
        $uniqueNumber->save();

        foreach ($languages as $language) {
            $newPartner = new Partner();
            $newPartner->name = $request->name;
            $newPartner->number = $uniqueNumber->id;
            $newPartner->description = $request->description;
            $newPartner->language_id = $language->id;
            $newPartner->webLink = $request->webLink;
            $newPartner->media_id = $request->media_id;

            $newPartner->save();   
        }

        return redirect()->route('partner-edit', ["id" => $uniqueNumber->id]);
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
        $partner = Partner::where(["number" => $id, "language_id" =>$language])->first();
        return view("admin.partners.action", compact("partner"));
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
        $request->validate([
            "name" => 'required|string|max:255',
            "description" => 'required|string|max:255',
            "webLink" => 'nullable|string|max:255|url',
            "media_id" => ['nullable', new RecommendationMediaIsPicture]
        ]);

        $language = Language::where("code", LocalizationService::getLocal())->first()->id;
        $partner = Partner::where(["number" => $id, "language_id" =>$language])->first();

        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->webLink = $request->webLink;

        $partner->save();

        foreach(Partner::where("number", $partner->number)->get() as $partner){
            $partner->media_id = $request->media_id;
            $partner->save();
        }

        return redirect()->route('partner-edit', ["id" => $partner->number]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partners = Partner::where("number",$id)->get();
        foreach($partners as $partner){
            $partner->delete();
        }

        return redirect()->route("partner");
    }
}
