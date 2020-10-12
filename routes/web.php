<?php

use App\Models\book;
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
    return view('welcome');

});


Route::get('/books', [\App\Http\Controllers\PostsController::class,"index"]);

Route::get('/books/create', [\App\Http\Controllers\PostsController::class,"create"])->name("book.crete");

Route::get('/books/books_save', [\App\Http\Controllers\PostsController::class,"save"])->name("book.save");






