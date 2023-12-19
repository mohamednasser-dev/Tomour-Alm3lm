<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    Route::get('/', [HomeController::class, 'index'])->name('web-home');
    Route::post('/front/reservation/store', [HomeController::class, 'storeReservation'])->name('reservation.store');
    Route::get('/reservation-search/{search}', [HomeController::class, 'searchReservation'])->name('reservation.search');
    Route::get('/reservation/search/page', [HomeController::class, 'searchPage'])->name('reservation.search.page');
    Route::post('/reservation/search/page', [HomeController::class, 'search'])->name('reservation.search.now');

});

