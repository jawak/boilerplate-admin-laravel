<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Misc
{
    /**
     * Save uploaded file to upload directory.
     *
     * @param UploadedFile $file
     * @return string
     */
    public static function handleUpload(UploadedFile $file): string
    {
        $fileName = now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //upload ke local dir
        Storage::put('media/'.$fileName, $file->getContent());

        return 'media/'.$fileName;
    }
}
