<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\AuthuserController;

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [AuthuserController::class, 'register']);
    Route::post('/login', [AuthuserController::class, 'login']);
    Route::post('/logout', [AuthuserController::class, 'logout']);
    Route::post('/refresh', [AuthuserController::class, 'refresh']);
    Route::post('/profile', [AuthuserController::class, 'profile']);
});