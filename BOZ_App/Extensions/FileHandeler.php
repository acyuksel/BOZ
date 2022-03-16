<?php

namespace Extensions;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileHandeler
{
    /**
     * Check if file Exists
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @return bool
     */
    static public function DoesFileExist(bool $isPublic, string $folder, string $fileName)
    {
        $filePath = "$folder/$fileName";
        if ($isPublic) $filePath = "public/$filePath";
        return Storage::exists($filePath);
    }
    /**
     * Get selected file
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @return bool
     */
    static public function GetFile(bool $isPublic, string $folder, string $fileName)
    {
        $filePath = "$folder/$fileName";
        if ($isPublic) $filePath = "public/$filePath";

        if (!FileHandeler::DoesFileExist($isPublic, $folder, $fileName)) return false;
        else return Storage::get($filePath);
    }
    /**
     * Save File
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @param  Illuminate\Http\UploadedFile  $file
     * @return bool
     */
    static public function SaveFile(bool $isPublic, string $folder, string $fileName, UploadedFile $file)
    {
        $filePath = "$folder";
        if ($isPublic) $filePath = "public/$filePath";

        return Storage::putFileAs($filePath, $file, $fileName) ? true : false;
    }
    /**
     * Delete selected file by name
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @return bool
     */
    static public function DeleteFileWithName(bool $isPublic, string $folder, string $fileName)
    {
        $filePath = "$folder/$fileName";
        if ($isPublic) $filePath = "public/$filePath";
        if (!FileHandeler::DoesFileExist($isPublic, $folder, $fileName)) return false;
        else {
            Media::where('name', $fileName)->delete();
            Storage::delete($filePath);
            return true;
        }
    }

    /**
     * Delete selected file with id
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  int  $Id
     * @return bool
     */
    static public function DeleteFileWithId(bool $isPublic, string $folder, int $id)
    {
        $file = Media::find($id);
        $filePath = "$folder/$file->name";
        if ($isPublic) $filePath = "public/$filePath";
        if (!FileHandeler::DoesFileExist($isPublic, $folder, $file->name)) return false;
        else {
            $file->delete();
            Storage::delete($filePath);
            return true;
        }
    }
}
