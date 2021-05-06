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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {

    // base route
    Route::get('/',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/blog',[App\Http\Controllers\AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/users',[App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/orders',[App\Http\Controllers\AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/contact',[App\Http\Controllers\AdminController::class, 'contact'])->name('admin.contact');

    // show view
    Route::get('/contact/{id}',[App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
    Route::get('/article/{id}',[App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');
    Route::get('/order/{id}',[App\Http\Controllers\OrderController::class, 'show'])->name('order.show');
    Route::get('/users/{id}',[App\Http\Controllers\UserController::class, 'show'])->name('user.show');

    // delete
    Route::delete('/contact/delete/{id}',[App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
    Route::delete('/article/delete/{id}',[App\Http\Controllers\ArticleController::class, 'destroy'])->name('contact.destroy');
    Route::delete('/order/delete/{id}',[App\Http\Controllers\OrderController::class, 'destroy'])->name('order.destroy');
    Route::delete('/users/delete/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

    // post

    // update

});
