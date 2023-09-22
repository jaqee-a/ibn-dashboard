<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login'  , [UserController::class, 'login'  ]);
Route::get ('/self'   , [UserController::class, 'self'   ]);
Route::get ('/logout' , [UserController::class, 'logout' ]);
Route::get ('/refresh', [UserController::class, 'refresh']);
