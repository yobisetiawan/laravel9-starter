<?php

use App\Http\Controllers\Web\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Dashboard\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('App\Http\Controllers\Web')
    ->group(
        function () {

            Auth::routes();

            Route::get('logout', [LoginController::class, 'logout']);

            Route::middleware(['auth'])->group(function () {
                Route::get('/', [HomeController::class, 'index']);
                Route::get('dashboard', [HomeController::class, 'index'])->name('home');
            });
        }
    );
