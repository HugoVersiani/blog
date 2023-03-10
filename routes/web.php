<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
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
Route::get('/', [PagesController::class, 'index']);
Auth::routes();
Route::resource('/blog', PostsController::class);
Route::resource('/tags', TagsController::class);

Route::get('/home',  [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resources('/blog', PostsController::class);



