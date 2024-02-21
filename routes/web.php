<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.main');
});

// Menampilkan semua buku
Route::get('/books', [BukuController::class, 'index'])->name('books.index');

// Menampilkan formulir untuk menambahkan buku baru
Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');

// Menyimpan buku baru ke dalam database
Route::post('/books', [BukuController::class, 'store'])->name('books.store');

// Menampilkan detail buku
Route::get('/books/{book}', [BukuController::class, 'show'])->name('books.show');

// Menampilkan formulir untuk mengedit buku
Route::get('books/{book}/edit', 'BookController@edit')->name('books.edit');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Menyimpan perubahan yang diperbarui ke dalam database
Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');

// Menghapus buku
Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');

//Route::view('/buku', 'buku', ['name' => 'kategori buku', 'phone' => '262561']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');