<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('books', 'App\Http\Controllers\BookController');

Route::get('/books/{book}', 'BookController@show')->name('books.show');

Route::get('/books/search', 'BookController@search')->name('books.search');

Route::get('/authors', 'App\Http\Controllers\BookController@authors')->name('authors.index');

Route::post('/books/{book}/borrow', 'BorrowController@borrow')->name('books.borrow');
Route::post('/books/{book}/return', 'BorrowController@return')->name('books.return');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::post('/books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');
Route::post('/books/{book}/return', [BookController::class, 'return'])->name('books.return');
Route::get('/authors', [BookController::class, 'authors'])->name('authors.index');
