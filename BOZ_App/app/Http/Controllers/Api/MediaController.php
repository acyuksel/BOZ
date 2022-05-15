<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medium;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{

    public function getAllVideos(Request $request)
    {
        $allVideos = Medium::where('extension', 'mp4')->paginate(8)->toArray();
        return $this->createResponse($allVideos, null, 'Success', null, 200);
    }

    public function getAllImages(Request $request)
    {
        $allVideos = Medium::whereIn('extension', ["png", "jpeg", "jpg"])->paginate(8)->toArray();
        return $this->createResponse($allVideos, null, 'Success', null, 200);
    }

    public function getAllAudios(Request $request)
    {
        $allVideos = Medium::where('extension', 'mp3')->paginate(8)->toArray();
        return $this->createResponse($allVideos, null, 'Success', null, 200);
    }


    public function storeMedia(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'media' => 'required|array|min:1',
            'media.*' => 'required|file|mimes:mp4,video/mp4,png,jpeg,jpg,Images/png,mp3',
        ]);;
        if ($validator->fails())
            return $this->createResponse(null, $validator->getMessageBag(), 'Validation error', "Media couldn't be added.", 400);

        $newMedia = [];

        foreach ($request->file('media') as $key => $medium) {
            $newMedium = new Medium([
                'name' => pathinfo($medium->getClientOriginalName(), PATHINFO_FILENAME),
                'extension' => $medium->clientExtension()
            ]);

            $storagePath = "{$this->getFileStorageFolder($newMedium->extension)}/";

            if (Medium::where('name', $newMedium->name)->where('extension', $newMedium->extension)->doesntExist()) {
                Storage::putFileAs($storagePath, $medium, $newMedium->GetNameWithExstension());
                $newMedium->save();
                array_push($newMedia, $newMedium);
            } else {
                $validator->getMessageBag()->add("medium.{$key}", "The media file {$newMedium->name} already exists.");
            }
        }

        if ($validator->getMessageBag()->isNotEmpty())
            return $this->createResponse($newMedia, $validator->getMessageBag(), 'Partial error', "Not all media could be added.", 400);
        else
            return $this->createResponse($newMedia, null, 'Success', "All media was added", 200);
    }

    public function deleteMedia(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'media' => 'required|array|min:1',
            'media.*' => 'required|integer|exists:media,id',
        ]);

        if ($validator->fails())
            return $this->createResponse(null, $validator->getMessageBag(), 'Validation error', "Media couldn't be Removed.", 400);

        foreach ($request->media as $mediaId) {
            $medium = Medium::find($mediaId);
            Storage::delete($this->getFileStorageFolder($medium->extension) . "/" . $medium->GetNameWithExstension());
            $medium->delete();
        }

        return $this->createResponse(null, null, "Success", "All Media Files are removed", 200);
    }


    private function getFileStorageFolder($fileExtension): string
    {
        $videoExtensions = ['mp4'];
        $audioExtensions = ['mp3'];
        $imageExtensions = ["png", "jpeg", "jpg"];

        if (in_array($fileExtension, $videoExtensions)) return "public/videos";
        else if (in_array($fileExtension, $audioExtensions)) return "public/audios";
        else return "public/images";
    }

    private function createResponse(array $data = null, MessageBag $errors = null, string $status, string $message = null, int $code): JsonResponse
    {
        $response = [];
        if ($data != null) $response['data'] = $data;
        if ($errors != null) $response['errors'] = $errors->getMessages();
        $response['status'] = $status;
        if ($message != null) $response['message'] = $message;
        $response['response_code'] = $code;

        return response()->json($response, $code);
    }
}
