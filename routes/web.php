<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\PostController;
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

//rotta per admin sezione post
Route::get('admin/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('admin/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('admin/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('admin/posts/{post}', [PostController::class, 'show'])->name('posts.show');


//rotta per ospite sito
Route::get('/news', function () {
    return view('news');
})->name('news');
