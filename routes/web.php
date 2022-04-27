<?php

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
    return view('home', [
        "name" => "Ucok",
        "email" => "ahmadtaufiq@gmail.com",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Ahmad Taufiq",
        "email" => "ahmadtaufiq@students.unnes.ac.id",
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
