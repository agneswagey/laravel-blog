<?php

namespace App\Models;
use Illuminate\Support\Collection;

class Post
{
    private static $blog_posts = [
        [
            "title"     => "My First Posts",
            "slug"      => "my-first-posts",
            "author"    => "Agnes Wagey",
            "body"      => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe officia explicabo esse magnam voluptates harum blanditiis modi, magni reiciendis quis rerum impedit cupiditate quod architecto nobis expedita ullam odit nulla. Debitis facere vero adipisci corrupti culpa commodi. Quasi repudiandae qui, libero perspiciatis, veniam sed rerum impedit, blanditiis neque vitae quo. Facilis odit totam a repudiandae maiores, eaque debitis quisquam quas, consectetur culpa architecto accusamus temporibus excepturi rerum officiis quasi impedit nulla repellat nemo. Architecto reiciendis optio blanditiis voluptate magnam ea.", 
        ],
        [
            "title"     => "My Second Posts",
            "slug"      => "my-second-posts",
            "author"    => "Jevon Noel",
            "body"      => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, magnam! Cum harum officiis molestiae nisi accusamus tenetur rem inventore earum atque corporis alias sunt, deleniti suscipit fuga quis, nemo impedit, natus sint animi perspiciatis velit dolorem eius pariatur perferendis. Illum voluptatum veritatis accusamus perferendis, possimus explicabo voluptatibus dolore qui sunt accusantium? Accusantium sed eum, nesciunt temporibus distinctio porro laboriosam esse, ex expedita nemo sit dicta eos quae sapiente odit tempora? Alias dolores placeat possimus in nam quod, aliquam ipsum nobis sed obcaecati dolore nesciunt molestiae, officiis at. Provident ipsum placeat, vel rem officia commodi, asperiores nemo corporis nihil nobis odio!", 
        ],
    ];

    public static function all() {
        //return self::$blog_posts;
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        /*  Kalau self itu untuk panggil property static,
            Kalau static itu untuk panggil method static.
         */

        //$posts = self::$blog_posts;
        $posts = static::all();     //panggil method all() karena sudah pakai collection.
        
        // Kalau udah pakai collection, yg dibawah ini hapus aja
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}