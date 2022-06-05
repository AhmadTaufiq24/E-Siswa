<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
})->name('welcome');

Route::get('e-kampus', function () {
    return view('e-kampus');
})->name('e-kampus');

Route::get('unnes', function () {
    return view('unnes');
})->name('unnes');

Route::get('e-konsultasi', function () {
    return view('e-konsultasi');
})->name('e-konsultasi');

Route::get('sisteminformasi', function () {
    return view('sisteminformasi');
})->name('sisteminformasi');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
