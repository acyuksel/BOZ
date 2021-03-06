<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Extensions\FileHandeler;
use App\Models\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function AddVideo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video' => 'required|file|mimes:mp4,video/mp4',
            'fileName' => 'required|string',
            'isPublic' => "required|boolean"
        ]);

        if ($validator->fails()) return redirect()->withErrors($validator);

        if (FileHandeler::SaveFile($request->get("isPublic"), "videos", $request->get("fileName"), $request->file("video"))) {
            $validator->errors()->add("video", "Something went wrong with saving you video, please try again.");
            return redirect()->withErrors($validator);
        }

        $Video = new Medium();
        $Video->isPublic = $request->isPublic;
        $Video->name = $request->fileName;
        $Video->extension = $request->file("video")->clientExtension();
        $Video->save();

        return redirect();
    }

    public function DeleteVideo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|integer|exists:media,id"
        ]);

        if (!$validator) return view();

        $file =  Medium::find($request->id);

        if (!FileHandeler::DeleteFileWithName($file->isPublic, "videos", $file->GetNameWithExstension())) {
            $validator->errors()->add("video", "Somthing went wrong with saving you video, please try again.");
            return redirect()->withErrors($validator);
        }

        $file->delete();

        return redirect();
    }
}
