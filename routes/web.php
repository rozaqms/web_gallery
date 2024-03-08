<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\postController;
use App\Http\Controllers\singleController;  
use App\Http\Controllers\ProfileController;  
use App\Http\Controllers\galleryController;  
use App\Models\post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::middleware('auth')->group(function () {



    Route::get('/home', function () {
        return view('index', [
            "title" => "Home"
        ]);
    });
    Route::get('/gallery', function () {
        return view('gallery', [
            "title" => "Gallery"
        ]);
    });
    Route::get('/gallery-single', function () {
        $foto = post::all();
        return view('gallery-single', [
            "foto" => $foto,
            "title" => "Gallery Single"
        ]);
    });
    Route::get('/elements', function () {
        return view('elements');
    });
    
    Route::get('/blog', function () {
        return view('blog', [
            "title" => "Blog"
        ]);
    });
    Route::get('/about', function () {
        return view('About', [
        "title" => "About" ]);
    });

    Route::get('/register', function () {
        return view('register', [
            "title" => "Register"
        ]);
    });
    Route::get('/post', function () {
        return view('post', [
            "title" => "Post"
        ]);
    });
    Route::get('/edit', function () {
        return view('edit', [
            "title" => "Edit"
        ]);
    });
});





Route::get('/login', [loginController::class, 'index']);
Route::post('/home', [loginController::class, 'login']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'Store']);

Route::get('/post', [postController::class, 'index']);
Route::post('/post', [postController::class, 'store'])->name('post.store');
// Route::resource('/contact', ProfileController::class);
Route::resource('/gallery-single', singleController::class);
Route::get('/show/{id}', [singleController::class, 'image'])->name('show');
Route::resource('/gallery',galleryController::class);

Route::post('/logout', [loginController::class, 'logout'])->name('logout');
Route::delete('/delete/{id}', [postController::class, 'delete'])->name('delete');

Route::get('/contact', function(){
    // return Auth::user();
    return view('contact',[
        'user' => Auth::user(),
        'title' => 'User'
    ]);
});
