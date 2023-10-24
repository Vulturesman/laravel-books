<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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
