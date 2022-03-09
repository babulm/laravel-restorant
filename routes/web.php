<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontController;
use App\Http\Controllers\backend\BackController;

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
// Frontend routs 

Route::get('/', [App\Http\Controllers\frontend\FrontController::class, 'home'])->name('index');

Route::get('/about', [App\Http\Controllers\frontend\FrontController::class, 'about'])->name('about');

Route::get('/service', [App\Http\Controllers\frontend\FrontController::class, 'service'])->name('service');

Route::get('/food-menu', [App\Http\Controllers\frontend\FrontController::class, 'menu'])->name('menu');

Route::get('/contact', [App\Http\Controllers\frontend\FrontController::class, 'contact'])->name('contact');

Route::get('/pages', [App\Http\Controllers\frontend\FrontController::class, 'pages'])->name('pages');

Route::get('/pages/testimonial', [App\Http\Controllers\frontend\FrontController::class, 'testimonial'])->name('testimonial');

Route::get('/pages/booking', [App\Http\Controllers\frontend\FrontController::class, 'booking'])->name('booking');

Route::get('/pages/our-team', [App\Http\Controllers\frontend\FrontController::class, 'team'])->name('team');


// backend auth procted routes 

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\backend\BackController::class, 'dashboard'])->name('dashboard');



