<?php

use App\Http\Controllers\StaticDataController;
use Illuminate\Support\Facades\Route;

Route::get('/cities', [StaticDataController::class, 'getCities']);
Route::get('/towns' , [StaticDataController::class, 'getTowns']);

