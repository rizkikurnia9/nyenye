<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// // Menampilkan semua buku
// Route::get('/books', [BukuController::class, 'index'])->name('books.index');

// // Menampilkan formulir untuk menambahkan buku baru
// Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');

// // Menyimpan buku baru ke dalam database
// Route::post('/books', [BukuController::class, 'store'])->name('books.store');

// // Menampilkan detail buku
// Route::get('/books/{book}', [BukuController::class, 'show'])->name('books.show');

// // Menampilkan formulir untuk mengedit buku
// Route::get('books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');

// Route::get('/books', [BukuController::class, 'index'])->name('books.index');

// // Menyimpan perubahan yang diperbarui ke dalam database
// Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');

// // Menghapus buku
// Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');

// //Route::view('/buku', 'buku', ['name' => 'kategori buku', 'phone' => '262561']);

// Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');

Route::get('/books', [BukuController::class, 'index'])->name('books.index');
Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');
Route::post('/books', [BukuController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');