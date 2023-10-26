<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Metode index digunakan untuk menampilkan daftar postingan.
    public function index()
    {
        return view('posts', [
            'title' => 'Posts', // Judul halaman, misalnya "Blog"
            'posts' => Post::all() // Mengambil semua postingan dari model "Post" dan mengirimkannya ke tampilan.
        ]);
    }

    // Metode show digunakan untuk menampilkan halaman tunggal untuk satu postingan.
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", // Judul halaman, misalnya "Single Post"
            "post" => $post // Mengirim satu postingan (objek) yang telah diberikan sebagai parameter ke tampilan.
        ]);
    }
}
