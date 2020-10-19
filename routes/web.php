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

Route::get('/books/create', [\App\Http\Controllers\PostsController::class,"create"])->name("book.create");

Route::post('/books/books_save', [\App\Http\Controllers\PostsController::class,"save"])->name("book.save");

Route::get('/books/{book}', [\App\Http\Controllers\PostsController::class,"show"])->name("book.show");

Route::get('/books/{book}/delete', [\App\Http\Controllers\PostsController::class,"delete"])->name("book.delete");

Route::get('/books/{book}/edit', [\App\Http\Controllers\PostsController::class,"edit"])->name("book.edit");

Route::put('/books/{book}/update', [\App\Http\Controllers\PostsController::class,"update"])->name("book.update");









