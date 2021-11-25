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

        // create user manual : 
        // User::create([
        //     'name' => 'Diana',
        //     'email' => 'diana@gmail',
        //     'password' => bcrypt('123tuwaga')
        // ]);

        // User::create([
        //     'name' => 'Lingga',
        //     'email' => 'lingga@gmail',
        //     'password' => bcrypt('123tuwaga')
        // ]);

        User::factory(3)->create();
        // create 2 category
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        //create post
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro, dicta voluptas quibusdam voluptate quis, possimus quam soluta libero suscipit consectetur autem laboriosam? Enim eum porro aspernatur? Reiciendis ducimus vitae cumque voluptatum repudiandae
        //     officia dolore labore. Aperiam quidem eum asperiores, enim corrupti minus rerum sequi in quia quo temporibus obcaecati sunt iste? Facilis, laborum natus eaque nihil non aperiam incidunt impedit sunt quis minus minima eum dolorem magnam. Nisi error, natus
        //     dolor consequatur quaerat soluta reprehenderit fuga harum magnam vero ex, esse qui. Nesciunt voluptatibus eaque impedit. Rem, voluptates, dolores minima asperiores recusandae quae est aliquam culpa, assumenda laboriosam quaerat!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro, dicta voluptas quibusdam voluptate quis, possimus quam soluta libero suscipit consectetur autem laboriosam? Enim eum porro aspernatur? Reiciendis ducimus vitae cumque voluptatum repudiandae
        //     officia dolore labore. Aperiam quidem eum asperiores, enim corrupti minus rerum sequi in quia quo temporibus obcaecati sunt iste? Facilis, laborum natus eaque nihil non aperiam incidunt impedit sunt quis minus minima eum dolorem magnam. Nisi error, natus
        //     dolor consequatur quaerat soluta reprehenderit fuga harum magnam vero ex, esse qui. Nesciunt voluptatibus eaque impedit. Rem, voluptates, dolores minima asperiores recusandae quae est aliquam culpa, assumenda laboriosam quaerat!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro, dicta voluptas quibusdam voluptate quis, possimus quam soluta libero suscipit consectetur autem laboriosam? Enim eum porro aspernatur? Reiciendis ducimus vitae cumque voluptatum repudiandae
        //     officia dolore labore. Aperiam quidem eum asperiores, enim corrupti minus rerum sequi in quia quo temporibus obcaecati sunt iste? Facilis, laborum natus eaque nihil non aperiam incidunt impedit sunt quis minus minima eum dolorem magnam. Nisi error, natus
        //     dolor consequatur quaerat soluta reprehenderit fuga harum magnam vero ex, esse qui. Nesciunt voluptatibus eaque impedit. Rem, voluptates, dolores minima asperiores recusandae quae est aliquam culpa, assumenda laboriosam quaerat!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et porro, dicta voluptas quibusdam voluptate quis, possimus quam soluta libero suscipit consectetur autem laboriosam? Enim eum porro aspernatur? Reiciendis ducimus vitae cumque voluptatum repudiandae
        //     officia dolore labore. Aperiam quidem eum asperiores, enim corrupti minus rerum sequi in quia quo temporibus obcaecati sunt iste? Facilis, laborum natus eaque nihil non aperiam incidunt impedit sunt quis minus minima eum dolorem magnam. Nisi error, natus
        //     dolor consequatur quaerat soluta reprehenderit fuga harum magnam vero ex, esse qui. Nesciunt voluptatibus eaque impedit. Rem, voluptates, dolores minima asperiores recusandae quae est aliquam culpa, assumenda laboriosam quaerat!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
