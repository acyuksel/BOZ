<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Extensions\FileHandeler;
use App\Models\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    public function storeMedia(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'is_public' => 'required|boolean',
            'medium' => 'required|array|min:1',
            'medium.*' => 'required|file|mimes:mp4,video/mp4,png,jpeg,jpg,Images/png,mp3',
        ]);

        if ($validator->fails()) return response()
            ->json([
                'errors' => $validator->getMessageBag(),
                'status' => 'error',
                'message' => "Media couldn't be added."
            ], 400);

        $newMedium = [];

        foreach ($request->file('medium') as $media) {
            $newMedia = new Medium([
                'isPublic' => $request->is_public,
                'name' => pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME),
                'extension' => $media->clientExtension()
            ]);

            if (!FileHandeler::DoesFileExist($newMedia->isPublic, $newMedia->GetNameWithExstension())) {
                FileHandeler::SaveFile($newMedia->isPublic, $newMedia->GetNameWithExstension(), $media);
                $newMedia->save();
                $newMedia->push($newMedia);
            } else {
                $validator->errors()->add("file exists", "The media file {$newMedia->name} already exists.");
            }
        }

        if ($validator->fails()) return response()->json([
            'errors' => $validator->getMessageBag(),
            'status' => 'partial error',
            'message' => "Not all media could be added."
        ], 400);
        else return response()->json([
            'data' => $newMedium,
            'status' => 'success',
            'message' =>
            'All media was added'
        ], 200);
    }
}
