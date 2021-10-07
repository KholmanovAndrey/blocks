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

//Route::get('/', function () {
//    return view('home');
//})->name('home');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/award', [\App\Http\Controllers\HomeController::class, 'award'])->name('award');
Route::get('/certificate', [\App\Http\Controllers\HomeController::class, 'certificate'])->name('certificate');
Route::get('/sale', [\App\Http\Controllers\HomeController::class, 'sale'])->name('sale');
Route::get('/payment-and-delivery', [\App\Http\Controllers\HomeController::class, 'payment_and_delivery'])->name('payment-and-delivery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// route news
Route::resource('/news', \App\Http\Controllers\NewsController::class)
    ->only(['index', 'show']);

// route article
Route::resource('/article', \App\Http\Controllers\ArticleController::class)
    ->only(['index', 'show']);

// route product
Route::resource('/product', \App\Http\Controllers\ProductController::class)
    ->only(['index', 'show']);

require __DIR__.'/auth.php';
