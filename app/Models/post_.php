<?php


    namespace App\Models;



    class post
    {
        private static $blog_posts = [
            [
                "title" => "judul posts pertama",
                "slug" => "judul-post-pertama",
                "author" => "Mi-Kun",
                "body" => "Lorem ipsum dolor sit amet consectetur,"
            ],
            [
                "title" => "judul posts kedua",
                "slug" => "judul-post-kedua",
                "author" => "Mi-chan",
                "body" => "Lorem ipsum dolor"
            ],
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }

    }
?>