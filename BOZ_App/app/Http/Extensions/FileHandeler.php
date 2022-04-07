<?php

namespace App\Http\Extensions;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class FileHandeler
{
    private const FOLDER = "media/";

    /**
     * Check if file Exists
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @return bool
     */
    static public function DoesFileExist(bool $isPublic, string $fileName)
    {
        $filePath = Self::FOLDER . $fileName;
        if ($isPublic) $filePath = "public/";
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
    static public function GetFile(bool $isPublic, string $fileName)
    {
        $filePath = Self::FOLDER . $fileName;
        if ($isPublic) $filePath = "public/$filePath";

        if (!FileHandeler::DoesFileExist($isPublic, Self::FOLDER, $fileName)) return false;
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
    static public function SaveFile(bool $isPublic, string $fileName, UploadedFile $file)
    {
        $filePath = Self::FOLDER;
        if ($isPublic) $filePath = "public/$filePath";

        return Storage::putFileAs($filePath, $file, $fileName . '.' . $file->clientExtension()) ? true : false;
    }
    /**
     * Delete selected file by name
     *
     * @param  bool  $isPublic
     * @param  string  $folder
     * @param  string  $fileName
     * @return bool
     */
    static public function DeleteFileWithName(bool $isPublic, string $fileName)
    {
        $filePath = Self::FOLDER . $fileName;
        if ($isPublic) $filePath = "public/$filePath";
        if (!FileHandeler::DoesFileExist($isPublic, Self::FOLDER, $fileName)) return false;
        else {
            Storage::delete($filePath);
            return true;
        }
    }
}
