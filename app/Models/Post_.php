<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "diana",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam explicabo rem temporibus, eaque animi et, quod, eius aspernatur soluta error nulla pariatur doloribus assumenda odit. Quia recusandae maiores sit, corrupti exercitationem consectetur cupiditate laborum fuga minus aut alias facilis nam fugit eligendi a atque adipisci eum culpa! Quam, molestias libero nesciunt nam reprehenderit laborum possimus nisi sapiente deleniti pariatur odit quas quos dicta, enim beatae similique praesentium illum dolores. Maiores illum veritatis voluptas. Corrupti beatae deserunt nemo consectetur dolorum reprehenderit."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "lingga",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt reprehenderit tempora eaque ad minima facere, quisquam labore non enim cupiditate saepe corrupti repudiandae neque porro nam ab iure pariatur ea illo harum ducimus nemo dolores ratione? Illum qui explicabo nisi doloremque quisquam sunt alias perspiciatis iusto! Cupiditate alias unde ratione dolore ullam magni praesentium molestias maiores adipisci possimus quis est doloribus tenetur voluptas dignissimos modi minus consequatur quod similique, officiis facere minima aspernatur. Quos, unde voluptate, iure alias eligendi libero voluptatibus quae excepturi fuga dicta debitis, blanditiis enim. Aut, iure minima. Unde consequuntur dolores cumque iste rerum. Maxime, corporis laborum!"
        ],
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
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
