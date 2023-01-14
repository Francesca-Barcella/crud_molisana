<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Guest\ProductController as GuestProductController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

//guest route
Route::get('products', [GuestProductController::class, 'index'])->name('guest.products.index');
Route::get('products/{product}', [GuestProductController::class, 'show'])->name('guest.products.show');



/* Route::get('/products', function () {
    return view('products');
})->name('products'); */

Route::resource('admin/products', ProductController::class);

Route::get('/news', function () {
    return view('news');
})->name('news');
