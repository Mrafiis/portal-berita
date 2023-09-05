<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [AdminController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/galery', function () {
    return view('galery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('kategori', KategoriController::class);

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'register'])->name('resgiter');

