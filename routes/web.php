<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\BookController as ControllersBookController;
use App\Http\Controllers\BookshopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about');

Route::get('api/test/array', [TestController::class, 'arrayResponse'])->name('array.response');
Route::get('api/test/model', [TestController::class, 'modelResponse'])->name('model.response');
Route::get('api/test/collection', [TestController::class, 'collectionResponse'])->name('collection.response');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/book/{book_id}', [ControllersBookController::class, 'show']);

Route::post('/book/{book_id}/review', [ReviewController::class, 'store'])->middleware('auth');

Route::delete('books/{id}/reviews/{review_id}', [ReviewController::class, 'delete']);

Route::get('/bookshop/{bookshop}', [BookshopController::class, 'show']);


// all admin routes
Route::group([
    'middleware' => 'can:admin' // * settings of the group
], function () {

    // any routes defined in here will automatically get the settings (*) from the group

    Route::get('/admin/books', [AdminBookController::class, 'index']);

    Route::get('/admin/users', [UserController::class, 'index']);
});
