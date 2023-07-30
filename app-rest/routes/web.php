<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
 
//     return ['token' => $token->plainTextToken];
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/api/user', [App\Http\Controllers\CarsController::class, 'index'])->name('cars');
// Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index'])->name('cars');



// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/api/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });