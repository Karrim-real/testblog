<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::post('/contact', [FrontendController::class, 'store'])->name('contact-submit');
Route::get('/show-message', [FrontendController::class, 'show'])->name('showmsg');

Route::get('/apitest', [FrontendController::class, 'showapi'])->name('api-test');
Route::post('/apitest', [FrontendController::class, 'storeapi'])->name('store-api');


