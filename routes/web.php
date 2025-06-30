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

Route::get('/',[App\Http\Controllers\Frontsite\LandingController::class, 'index'])->name('home');
Route::get('ourstory', [App\Http\Controllers\Frontsite\OurStoryController::class, 'index'])->name('ourstory');
Route::get('productservices', [App\Http\Controllers\Frontsite\ProductServiceController::class, 'index'])->name('productservices');
Route::get('portfolio', [App\Http\Controllers\Frontsite\PortfolioController::class, 'index'])->name('portfolio');
Route::get('ourdemo', [App\Http\Controllers\Frontsite\OurDemoController::class, 'index'])->name('ourdemo');
Route::get('contact', [App\Http\Controllers\Frontsite\ContactController::class, 'index'])->name('contact');
Route::get('login', [App\Http\Controllers\Frontsite\LoginAreaController::class, 'index'])->name('loginarea');
Route::post('/sendEmail', [App\Http\Controllers\Frontsite\ContactController::class, 'sendEmail'])->name('mesagges');