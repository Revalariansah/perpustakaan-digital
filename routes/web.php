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

Route::get('/login', function () {
    return view('login');
});

Route::get('/login/dashboard', function () {
    return view('index');
});

Route::get('/login/dashboard/kategori_buku', function () {
    return view('kategoribuku.kategori_buku');
});
Route::get('/login/dashboard/user', function () {
    return view('User.user');
});

Route::get('/register', function () {
    return view('register');
});   