<?php

// use App\Http\Controllers\AuthorController;
// use App\Http\Controllers\BookController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\MahasiswaController;
// use App\Http\Controllers\PenulisController;

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

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/abc', [HomeController::class, 'abc']);

// Route::get('/mahasiswa/{npm}', [MahasiswaController::class, 'view']);
// Route Book
// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
// Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
// Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

// Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
// Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
// Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
// Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');

// Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
// Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
// Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);