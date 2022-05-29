<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Rules\RecommendationMediaIsPicture;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
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

        $newPartner = new Partner();
        $newPartner->name = $request->name;
        $newPartner->description = $request->description;
        $newPartner->webLink = $request->webLink;
        $newPartner->media_id = $request->media_id;

        $newPartner->save();

        return view("admin.partners.action", ["partner" => $newPartner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
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

        $partner = Partner::Find($id);

        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->webLink = $request->webLink;
        $partner->media_id = $request->media_id;

        $partner->save();

        return view("admin.partners.action", ["partner" => $partner]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::Find($id);
        $partner->delete();

        return redirect()->route("partner");
    }
}
