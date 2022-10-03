<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            

             User::create([
                 'name' => 'Fahmi',
                 'username'=>'Mi',
                 'email' => 'Mi@gmail.com',
                 'password' => bcrypt('admin')
             ]);

            //  User::create([
            //      'name' => 'Mi-kun',
            //      'email' => 'Miekun@gmail.com',
            //      'password' => bcrypt('12345')
            //  ]);

            User::factory(3)->create();

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming',
            ]);

            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design',
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal',
            ]);

            Post::factory(20)->create();
            
            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur
            //     adipisicing elit. Sapiente, esse!',
            //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sunt
            //     tenetur blanditiis sit quod est vero praesentium inventore velit possimus,
            //     ipsam itaque! Natus architecto blanditiis exercitationem itaque amet libero,
            //     incidunt mollitia vitae quisquam nulla laudantium.',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Dua',
            //     'slug' => 'judul-ke-dua',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur
            //     adipisicing elit. Sapiente, esse!',
            //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sunt
            //     tenetur blanditiis sit quod est vero praesentium inventore velit possimus,
            //     ipsam itaque! Natus architecto blanditiis exercitationem itaque amet libero,
            //     incidunt mollitia vitae quisquam nulla laudantium.',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Tiga',
            //     'slug' => 'judul-ke-tiga',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur
            //     adipisicing elit. Sapiente, esse!',
            //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sunt
            //     tenetur blanditiis sit quod est vero praesentium inventore velit possimus,
            //     ipsam itaque! Natus architecto blanditiis exercitationem itaque amet libero,
            //     incidunt mollitia vitae quisquam nulla laudantium.',
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Empat',
            //     'slug' => 'judul-ke-empat',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur
            //     adipisicing elit. Sapiente, esse!',
            //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sunt
            //     tenetur blanditiis sit quod est vero praesentium inventore velit possimus,
            //     ipsam itaque! Natus architecto blanditiis exercitationem itaque amet libero,
            //     incidunt mollitia vitae quisquam nulla laudantium.',
            //     'category_id' => 2,
            //     'user_id' => 2
            // ]);
    }
}
