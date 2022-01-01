<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();

        // User::create([
        //     'name'  => 'Agnes Emanuella',
        //     'email' => 'agnes.ema.09@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'  => 'Jevon Noel',
        //     'email' => 'jevonnoel@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Web Design',
            'slug'  => 'web-design'
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama Baru',
        //     'slug'  => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum, aperiam qui corrupti corporis laborum magnam. Illo incidunt ipsa saepe accusantium molestias eum repudiandae! Blanditiis assumenda fuga veniam rem dolore nam eveniet asperiores vitae suscipit, sint aliquid qui modi natus provident aperiam in? Eos et similique animi ipsa veritatis molestiae fugiat esse nostrum',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua Baru',
        //     'slug'  => 'judul-kedua',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum, aperiam qui corrupti corporis laborum magnam. Illo incidunt ipsa saepe accusantium molestias eum repudiandae! Blanditiis assumenda fuga veniam rem dolore nam eveniet asperiores vitae suscipit, sint aliquid qui modi natus provident aperiam in? Eos et similique animi ipsa veritatis molestiae fugiat esse nostrum',
        //     'category_id'   => 1,
        //     'user_id'       => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga Baru',
        //     'slug'  => 'judul-ketiga',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur enim distinctio accusantium saepe ipsa id quo eum dignissimos ab culpa omnis rerum, aperiam qui corrupti corporis laborum magnam. Illo incidunt ipsa saepe accusantium molestias eum repudiandae! Blanditiis assumenda fuga veniam rem dolore nam eveniet asperiores vitae suscipit, sint aliquid qui modi natus provident aperiam in? Eos et similique animi ipsa veritatis molestiae fugiat esse nostrum',
        //     'category_id'   => 2,
        //     'user_id'       => 1
        // ]);
    }
}
