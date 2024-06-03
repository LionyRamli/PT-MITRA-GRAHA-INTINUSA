<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');
<<<<<<< HEAD
=======

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
>>>>>>> 355c8ac6b97576ef2f19eaa5b00b71226aa3642d
