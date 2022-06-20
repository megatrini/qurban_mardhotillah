<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\QurbanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('qurban', \App\Http\Controllers\API\QurbanController::class);

// Route::get('qurban',[QurbanController::class, 'index']);
// Route::post('qurban/store',[QurbanController::class, 'store']);
// Route::get('qurban/show/{id}',[QurbanController::class, 'show']);
// Route::post('qurban/update/{id}',[QurbanController::class, 'update']);
// Route::get('qurban/destroy/{id}',[QurbanController::class, 'destroy']);