<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\postController;
use App\Models\post;
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
    return view('index', [
        "title" => "Home"
    ]);
});
Route::get('/1', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::get('/2', function () {
    return view('gallery-single', [
        "title" => "Gallery Single"
    ]);
});
Route::get('/3', function () {
    return view('elements');
});
Route::get('/4', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});
Route::get('/5', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});
Route::get('/6', function () {
    return view('About');
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/8', function () {
    return view('register', [
        "title" => "Register"
    ]);
});
Route::get('/9', function () {
    return view('post', [
        "title" => "Post"
    ]);
});










Route::get('/login',[loginController::class, 'index']);
Route::post('/7',[loginController::class, 'login']);

Route::get('/8',[registerController::class, 'index']);
Route::post('/8',[registerController::class, 'Store']);

Route::get('/9',[postController::class, 'index']);
Route::post('/9',[postController::class, 'Post']);