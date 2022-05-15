<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Extensions\FileHandeler;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{

    public function AddImage(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|file|mimes:png, jpeg, jpg, Images/png',
            'fileName' => 'required|string',
            'isPublic' => "required|boolean"
        ]);

        if ($validator->fails()) return redirect()->withErrors($validator);

        if (FileHandeler::SaveFile($request->get("isPublic"), "images", $request->get("fileName"), $request->file("image"))) {
            $validator->errors()->add("image", "Something went wrong with saving your image, please try again.");
            return redirect()->withErrors($validator);
        }
        $Image = new Medium();
        $Image->isPublic = $request->isPublic;
        $Image->name = $request->fileName;
        $Image->extension = $request->file("image")->clientExtension();
        $Image->save();

        return redirect();
    }

    public function DeleteImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|integer|exists:medium,id"
        ]);

        if (!$validator) return view();

        $file =  Medium::find($request->id);

        if (!FileHandeler::DeleteFileWithName($file->isPublic, "images", $file->GetNameWithExstension())) {
            $validator->errors()->add("image", "Somthing went wrong with deleting your image, please try again.");
            return redirect()->withErrors($validator);
        }

        $file->delete();

        return redirect();
    }
}
