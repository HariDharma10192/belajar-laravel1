<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts, //ini untuk menampilkan post yg terk
        'category' => $category->name

    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts
    ]);
});
