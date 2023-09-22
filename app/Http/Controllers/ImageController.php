<?php

namespace App\Http\Controllers;

use App\Helpers\ErpResponse;
use App\Helpers\ErrorHelper;
use App\Http\Requests\ImageRequest;
use App\Models\Core\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth:api');
    }

    // public function getImage(Request $request, string $file_name) {
    //     $user = $request->user();
    //     $image = Image::query()->where([['name', $file_name], ['platform_id', $user->platform_id]])->first();


    //     if(!is_null($image)){
    //         $image_path = storage_path('app/public/assets') . '/' . $image->name;

    //         return response()->file($image_path);
    //     }

    //     return response('Image not found', 404);
    // }

    public function createImage(ImageRequest $request): Response {
        $user = $request->user();
        $response = new ErpResponse();
        if(!$request->hasFile('image')) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            return $response;
        }

        $file = $request->file('image');

        try{
            $image_hash = md5(file_get_contents($request->file('image')->path()));

            $image = Image::query()->where('hash', $image_hash)->first();

            if(is_null($image)) {
                $image_path = public_path('assets');
                $image_name = $image_hash . '.' . $file->extension();
                $file->move($image_path, $image_name);
                $image = new Image();
                $image->hash = $image_hash;
                $image->name = $image_name;
                $image->save();
            }

            $response->setSuccess(true);
            $response->setJsonContent($image, "image");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }
        return $response;
    }

    public function deleteImage(Request $request, $file_name): Response {
        $user = $request->user();
        $response = new ErpResponse();
        $image = Image::query()->where('name', $file_name)->first();


        if(!is_null($image)){
            $image_path = public_path('assets') . '/' . $image->name;

            $image->delete();
            unlink($image_path);

            $response->setSuccess(true);
            $response->setJsonContent("Image deleted successfuly", "message");
            return $response;
        }

        $response->setJsonContent("Image not found", "message");
        return $response;

    }
}
