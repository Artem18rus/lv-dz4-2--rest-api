<?php

use App\Http\Controllers\ApiTokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Auth;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('/cars', App\Http\Controllers\CarsController::class);
});

Route::post('/tokens/create', [ApiTokenController::class, 'createToken'])->name('tokensCreate');

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user', function() {
//         return response(Auth::user());
//     });
//     Route::get('/todo-list', [TodoApiController::class, 'list']);
//     Route::post('/todo-list/create', [TodoApiController::class, 'create']);
// });