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

Route::get('/7', function () {
    return view('index');
});
Route::get('/1', function () {
    return view('gallery');
});
Route::get('/2', function () {
    return view('gallery-single');
});
Route::get('/3', function () {
    return view('elements');
});
Route::get('/4', function () {
    return view('contact');
});
Route::get('/5', function () {
    return view('blog');
});
Route::get('/6', function () {
    return view('About');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/8', function () {
    return view('register');
});