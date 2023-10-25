<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'HAri Dharma',
            'body' => 'Lorem Ipsum adalah contoh teks yang digunakan dalam industri pencetakan dan penataan huruf. Lorem Ipsum telah menjadi standar industri sejak abad ke-16, ketika seorang tukang cetak yang tidak dikenal mengambil kumpulan jenis dan mengacaknya untuk membuat buku contoh. Ini telah bertahan selama lima abad tidak hanya bertahan tidak berubah saja, tetapi juga telah masuk ke penataan huruf elektronik, dan tidak berubah menjadi lembaran penataan huruf elektronik.

            '
        ],
        [
            'title' => 'Judul Post Kedua ',
            'slug' => 'judul-post-kedua',
            'author' => 'Doddy',
            'body' => 'Lorem Ipsum adalah contoh teks yang digunakan dalam industri pencetakan dan penataan huruf. Lorem Ipsum telah menjadi standar industri sejak abad ke-16, ketika seorang tukang cetak yang tidak dikenal mengambil kumpulan jenis dan mengacaknya untuk membuat buku contoh. Ini telah bertahan selama lima abad tidak hanya bertahan tidak berubah saja, tetapi juga telah masuk ke penataan huruf elektronik, dan tidak berubah menjadi lembaran penataan huruf elektronik. Ia mulai populer dalam 60s dengan rilisnya lembaran Letraset yang mengandung pasase Lorem Ipsum, dan baru-baru ini dengan perangkat lunak penataan huruf seperti Aldus PageMaker yang menyertakan versi Lorem Ipsum.      '
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {

        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
