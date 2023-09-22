<?php

use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(base_path('routes/dashboard/v1/auth.php'));
Route::prefix('user')->group(base_path('routes/dashboard/v1/user.php'));
Route::prefix('communication')->group(base_path('routes/dashboard/v1/communication.php'));
Route::prefix('subject')->group(base_path('routes/dashboard/v1/subject.php'));


