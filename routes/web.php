<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'active' => 'wellcome',
        'test' => 'Hai Ini Test Dari Routes',
        'title' => 'Welcome'
    ]);
});


Route::get('/home', function () {
    return view('home', [
        'active' => 'home',
        'title' => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'active' => 'about',
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
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
// Route::prefix('dashboard/posts')->middleware('auth')->group(function () {
//     Route::get('checkSlug/{slug}', [DashboardPostController::class, 'checkSlug'])->name('dashboard.posts.checkSlug');
//     Route::resource('/', DashboardPostController::class);
// });

// Route::resource('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
