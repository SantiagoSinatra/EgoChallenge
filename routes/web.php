<?php

namespace App\Http\Controllers;

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

Route::get('/', HomePageController::class . '@index')->name('home-page');
Route::get('/{carId}', HomePageController::class . '@show')->name('car-page');
Route::get('order/{order}/{direction}', HomePageController::class . '@orderBy')->name('ordered-car-page');
Route::get('filter/{filter}', HomePageController::class . '@filterBy')->name('filtered-car-page');
