<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/news-event', function () {
    return view('news');
})->name('news');
Route::get('/news-event/{id}', [GeneralController::class, 'news'])->name('news.more');


Route::get('/register', function () {
    return view('register.register');
})->name('register');

Route::post('/register/form', function () {
    return view('register.form');
})->name('next');

Route::resource('product', ProductController::class);

Route::get('/shop/purchase/{id}', [ProductController::class, 'purchase'])->name('purchase');
Route::post('/shop/buy/{id}', [ProductController::class, 'buy'])->name('buy');
