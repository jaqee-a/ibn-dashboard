<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get ('/',          [UserController::class, 'getUsers'     ]);
Route::post('/',          [UserController::class, 'createUser']);
Route::get ('/{user_id}', [UserController::class, 'getUser'      ]);
Route::get ('/roles',     [UserController::class, 'getRoles'     ]);

