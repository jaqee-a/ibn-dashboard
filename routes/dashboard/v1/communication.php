<?php

use App\Http\Controllers\CommunicationController;
use Illuminate\Support\Facades\Route;

Route::post  ('/compose'         , [CommunicationController::class, 'compose'           ]);
Route::get   ('/read'            , [CommunicationController::class, 'read'              ]);
Route::get   ('/readAll'         , [CommunicationController::class, 'readAll'           ]);
Route::get   ('/'                , [CommunicationController::class, 'getCommunications' ]);
Route::delete('/communication_id', [CommunicationController::class, 'deleteCommunication' ]);
