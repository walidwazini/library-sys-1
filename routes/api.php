<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    return response()->json([
        'msg' => 'Welcome to Library Sys. 1 API'
    ]);
});

Route::group(['prefix' => '/book'], function (){
    Route::get('/',[BookController::class,'index']);
    // Route::get('/{id}',[BookController::class,'show']);
    // Route::update('/{id}',[BookController::class,'update']);
    // Route::delete('/{id}',[BookController::class,'delete']);
});