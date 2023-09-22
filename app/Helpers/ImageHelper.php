<?php

namespace App\Helpers;

use App\Models\Core\Image;

class ImageHelper {

    public static function tryDeleteImage($image_id, $platform_id): bool {
        $image = Image::query()->where([
            ['id', $image_id],
            ['platform_id', $platform_id]
        ])->first();

        try{
            $image_name = $image->name;
            unlink(public_path('assets') . '/' . $image_name);

            $image->delete();

            return true;
        }catch(\Throwable $ex){}

        return false;
    }

    // public static function checkImageUsage($image_id): bool {
    // }
}
