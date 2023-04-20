<?php

// use Illuminate\Http\Request;
use App\Http\Controllers\API\PassportAuthController;
use App\Http\Controllers\API\TasksController;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [PassportAuthController::class, 'userInfo']);

    Route::resource('tasks', TasksController::class);

});

Route::middleware('api')->group(function () {
    Route::resource('tasks', TasksController::class);
});
