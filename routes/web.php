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
Route::get('aboutus', [App\Http\Controllers\Frontsite\AboutUsController::class, 'index'])->name('aboutus');
Route::get('productservices', [App\Http\Controllers\Frontsite\ProductServiceController::class, 'index'])->name('productservices');
Route::get('contact', [App\Http\Controllers\Frontsite\ContactController::class, 'index'])->name('contact');
Route::post('/sendEmail', [App\Http\Controllers\Frontsite\ContactController::class, 'sendEmail'])->name('mesagges');