<?php

namespace Extensions;

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
     * @param  string  $fileExtension
     * @return bool
     */
    static public function DoesFileExist(bool $isPublic, string $folder, string $fileName, string $fileExtension)
    {
        $filePath = "$folder/$fileName.$fileExtension";
        if ($isPublic) $filePath = "public/$filePath";
        return Storage::exists($filePath);
    }
    /**
     * Get selected file
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @param  string  $fileExtension
     * @return bool
     */
    static public function GetFile(bool $isPublic, string $folder, string $fileName, string $fileExtension)
    {
        $filePath = "$folder/$fileName.$fileExtension";
        if ($isPublic) $filePath = "public/$filePath";

        if (!FileHandeler::DoesFileExist($isPublic, $folder, $fileName, $fileExtension)) return false;
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

        return Storage::putFileAs($filePath, $file, $fileName . $file->clientExtension()) ? true : false;
    }
    /**
     * Delete selected file
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @param  string  $fileExtension
     * @return bool
     */
    static public function DeleteFile(bool $isPublic, string $folder, string $fileName, string $fileExtension)
    {
        $filePath = "$folder/$fileName";
        if ($isPublic) $filePath = "public/$filePath";
        if (!FileHandeler::DoesFileExist($isPublic, $folder, $fileName, $fileExtension)) return false;
        else {
            Storage::delete($filePath);
            return true;
        }
    }
}
