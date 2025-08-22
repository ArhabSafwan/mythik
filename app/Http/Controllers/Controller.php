<?php

namespace App\Http\Controllers;

abstract class Controller
{
    const DEFAULT_ERROR_MESSAGE = 'Something went wrong. Please try again later.';
    const DEFAULT_SQL_ERROR_MESSAGE = 'Something went wrong in the database';
    const PERMISSION_MESSAGE = 'You have no permission of this module';
    const ACCESS_MESSAGE = 'Access denied: You have been blocked from accessing the admin functionality';
    const APP_LOGIN = 'User does not have Access App permission!';
    const PAGINATOR_NUMBER = 100;
    const TRY_CATCH_MESSAGE = 'Something went wrong';
    const WEB_PAGINATOR_NUMBER = 20;
    
    public function UploadImage($request, $name, $directory)
    {
        $doUpload = function ($image) use ($directory) {
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $imageName = $name . '_' . uniqid() . '.' . $extension;

            $path = $image->storeAs($directory, $imageName, 'public');

            return $path;
        };

        if (!empty($name) && $request->hasFile($name)) {
            $file = $request->file($name);

            if (is_array($file) && count($file)) {
                $imagesPath = [];

                foreach ($file as $key => $image) {
                    $imagesPath[] = $doUpload($image);
                }

                return $imagesPath;
            } else {
                return $doUpload($file);
            }
        }

        return false;
    }
}
