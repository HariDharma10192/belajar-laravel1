<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('welcome', [
        'test' => 'Hai Ini Test Dari Routes',
        'title' => 'Welcome'
    ]);
});


Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama'  => 'Hari Dharma',
        'email' => 'admin@gmail.com',
        'alamat' => 'Jl. Raya Cimanggu No 123, Bandung',
        'image'  => '../images/hari.jpg'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
