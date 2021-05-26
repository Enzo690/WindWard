<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// admin route
Route::prefix('admin')->middleware(['auth'])->group(function () {

    // base route
    Route::get('/',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/blog',[AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/users',[AdminController::class, 'users'])->name('admin.users');
    Route::get('/orders',[AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/contact',[AdminController::class, 'contact'])->name('admin.contact');

    // show view
    Route::get('/contact/{id}',[ContactController::class, 'show'])->name('contact.show');
    Route::get('/blog/show/{slug}',[ArticleController::class, 'show'])->name('article.show');
    Route::get('/order/{id}',[OrderController::class, 'show'])->name('order.show');
    Route::get('/users/{id}',[UserController::class, 'show'])->name('user.show');

    // delete
    Route::delete('/contact/delete/{id}',[ContactController::class, 'destroy'])->name('contact.destroy');
    Route::delete('/article/delete/{id}',[ArticleController::class, 'destroy'])->name('article.destroy');
    Route::delete('/order/delete/{id}',[OrderController::class, 'destroy'])->name('order.destroy');
    Route::delete('/users/delete/{id}',[UserController::class, 'destroy'])->name('user.destroy');

    // create
    Route::get('/blog/create',[ArticleController::class, 'create'])->name('admin.blog.create');

    // post
    Route::post('/blog/store', [ArticleController::class, 'store'])->name('admin.blog.store');

    // update
    Route::put('/blog/update/{id}', [ArticleController::class, 'update'])->name('admin.blog.update');

});
