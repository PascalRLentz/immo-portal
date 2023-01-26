<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('index');

Route::group(['prefix' => 'immobilien', 'as' => 'immobilien.'], function () {
    Route::get('/', [\App\Http\Controllers\RealEstateController::class, 'index'])->name('index');

    Route::group(['prefix' => '{real_estate}', 'as' => '{real_estate}.'], function () {
        Route::get('/', [\App\Http\Controllers\RealEstateController::class, 'show'])->name('show');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
