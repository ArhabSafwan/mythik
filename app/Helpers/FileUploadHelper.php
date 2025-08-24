<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUploadHelper
{
    /**
     * Upload a file and delete the old one if provided.
     *
     * @param UploadedFile|null $file
     * @param string|null $oldPath
     * @param string $folder
     * @param string $disk
     * @return string|null
     */
    public static function upload(?UploadedFile $file, ?string $oldPath = null, string $folder = 'uploads', string $disk = 'public'): ?string
    {
        if (!$file) {
            return $oldPath;
        }

        if ($oldPath && Storage::disk($disk)->exists($oldPath)) {
            Storage::disk($disk)->delete($oldPath);
        }

        return $file->store($folder, $disk);
    }
}
