<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Category::create([
        //     'name'=>'Web Programming',
        //     'slug'=>'web-programming' 
        // ]);


        // Post::create([
        //     'title'=> 'Judul Artikel 1',
        //     'author_id'=>1,
        //     'category_id'=>1,
        //     'slug'=> 'judul-artikel-1',
        //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ex, enim vero laudantium odio earum fuga veniam quas commodi vel quae, sunt quidem reprehenderit obcaecati tenetur sequi itaque architecto eaque suscipit doloremque tempore deserunt nostrum voluptatibus? Repellendus beatae maxime, totam ratione fuga minus enim voluptatem eius nisi itaque reprehenderit officiis! Deleniti atque ipsam non dolor! Magni deleniti praesentium cumque sint autem, sapiente ex commodi quis id impedit magnam qui ducimus consequatur officia aperiam fuga non.'  
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class, ServiceSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
