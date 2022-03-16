<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Extensions\FileHandeler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function AddVideo(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'video' => 'required|mimes:video/mp4',
            'fileName' => 'required|string',
            'isPublic' => "required|boolean"
        ]);
        if ($validated->fails()) return redirect("")->withErrors($validated);

        if (!FileHandeler::SaveFile($request->get("isPublic"), "videos", $request->get("fileName"), $request->file("video")))
            return redirect("")->withErrors($validated)->add("video", "Somthing went wrong with saving you video, please try again.");

        return view("");
    }

    public function DeleteVideo(Request $request)
    {
        $validated = $request->validate([
            "id" => "required|integer|exists:media,id"
        ]);

        if (!$validated) return view();

        $file =  Media::find($request->id);

        if (FileHandeler::DeleteFileWithId($file->is_public, "videos", $file->id()))
            return redirect("")->withErrors($validated)->add("video", "Somthing went wrong with saving you video, please try again.");

        return view("");
    }
}
