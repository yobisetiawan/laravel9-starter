<?php

 
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Profile\ProfileController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']); 
        Route::post('register', [AuthController::class, 'register']);
        Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
        Route::post('verify-password', [AuthController::class, 'verifyResetPassword']);
        Route::post('reset-password', [AuthController::class, 'resetPassword']);
    });

    Route::middleware('auth:api')->group(function () {
        Route::prefix('auth')->group(function () {
            Route::get('logout', [AuthController::class, 'logout']);
        });
        Route::prefix('user')->group(function () {
            Route::get('/', [ProfileController::class, 'index']);
        });
    });
});
