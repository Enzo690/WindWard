<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('product', [HomeController::class, 'product'])->name('product');

Route::prefix('blog')->group(function () {
    Route::match(['get', 'post'], '/', [HomeController::class, 'blog']);
    Route::get('show/{slug}', [HomeController::class, 'showBlog'])->name('showBlog');
});
require __DIR__.'/auth.php';

Auth::routes();

// admin route
Route::prefix('admin')->middleware(['admin'])->group(function () {

    // base route
    Route::get('/',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/blog',[ArticleController::class, 'index'])->name('admin.blog');
    Route::get('/users',[UserController::class, 'index'])->name('admin.users');
    Route::get('/orders',[OrderController::class, 'index'])->name('admin.orders');
    Route::get('/contact',[ContactController::class, 'index'])->name('admin.contact');

    // show view
    Route::get('/contact/{id}',[ContactController::class, 'show'])->name('contact.show');
    Route::get('/blog/show/{slug}',[ArticleController::class, 'show'])->name('article.show');
    Route::get('/order/{id}',[OrderController::class, 'show'])->name('order.show');
    Route::get('/users/{id}',[UserController::class, 'show'])->name('user.show');

    // delete
    Route::delete('/contact/delete',[ContactController::class, 'destroy'])->name('contact.destroy');
    Route::delete('/article/delete',[ArticleController::class, 'destroy'])->name('article.destroy');
    Route::delete('/order/delete',[OrderController::class, 'destroy'])->name('order.destroy');
    Route::delete('/users/delete',[UserController::class, 'destroy'])->name('user.destroy');

    // create
    Route::get('/blog/create',[ArticleController::class, 'create'])->name('admin.blog.create');

    // post
    Route::post('/blog/store', [ArticleController::class, 'store'])->name('admin.blog.store');

    // update
    Route::put('/blog/update/{id}', [ArticleController::class, 'update'])->name('admin.blog.update');

});
