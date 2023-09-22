<?php

use Illuminate\Support\Facades\Route;


Route::prefix('static')->group(base_path('routes/common/v1/static.php'));
Route::prefix('image')->group(base_path('routes/common/v1/image.php'));

