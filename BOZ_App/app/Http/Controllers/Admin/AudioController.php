<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;


class AudioController extends Controller
{
    public function AddAudio(Request $request)
    {
        $validator = $request->validate([
            'video' => 'required|file|mimes:mp3',
            'fileName' => 'required|string',
            'isPublic' => "required|boolean"
        ]);
        if ($validator->fails()) return redirect()->withErrors($validator);

        if (!FileHandeler::SaveFile($request->get("isPublic"), "audioFragments", $request->get("fileName"), $request->file("audio")))
        return redirect("")->withErrors($validated)->add("audio", "Failed to save audio fragment.");

        $Audio = new Media();
        $Audio->isPublic = $request->isPublic;
        $Audio->name = $request->fileName;
        $Audio->extension = $request->file("audio")->clientExtension();
        $Audio->save();

        return redirect();
    }

    public function deleteAudio(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|integer|exists:audio,id"
        ]);

        if (!$validator) return view();

        $file =  Media::find($request->id);

        if (!FileHandeler::DeleteFileWithName($file->isPublic, "audioFragments", $file->GetNameWithExstension())) {
            $validator->errors()->add("audio", "Failed to delete audio fragment.");
            return redirect()->withErrors($validator);
        }

        $file->delete();

        return redirect();
    }
}
