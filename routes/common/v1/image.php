<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::delete('/{file_name}', [ImageController::class, 'deleteImage']);
Route::post  ('/'           , [ImageController::class, 'createImage']);
Route::get   ('/{file_name}', [ImageController::class, 'getImage'   ]);

