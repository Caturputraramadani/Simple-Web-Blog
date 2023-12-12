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
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Catur Putra Ramadani',
            'username' => 'caturputraramadani',
            'email' => 'caturputraramadani@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Harmonie Granger',
        //     'email' => 'harmonie@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati debitis officia deserunt ullam nesciunt, rem veritatis quis qui soluta rerum accusantium illum odio distinctio earum voluptas delectus illo neque maxime. Sunt culpa, nobis, quaerat eligendi, repellat illum obcaecati quis recusandae dolorum quod inventore nostrum totam enim unde ratione iure praesentium assumenda vero perferendis. Dignissimos distinctio, exercitationem blanditiis dolorem id assumenda voluptates, atque nisi libero beatae rem optio eligendi, alias aperiam possimus culpa? Porro voluptates modi aut dolorum consectetur repudiandae earum culpa praesentium! Quod vero accusantium distinctio illum nihil esse quos ex corrupti non ea!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati debitis officia deserunt ullam nesciunt, rem veritatis quis qui soluta rerum accusantium illum odio distinctio earum voluptas delectus illo neque maxime. Sunt culpa, nobis, quaerat eligendi, repellat illum obcaecati quis recusandae dolorum quod inventore nostrum totam enim unde ratione iure praesentium assumenda vero perferendis. Dignissimos distinctio, exercitationem blanditiis dolorem id assumenda voluptates, atque nisi libero beatae rem optio eligendi, alias aperiam possimus culpa? Porro voluptates modi aut dolorum consectetur repudiandae earum culpa praesentium! Quod vero accusantium distinctio illum nihil esse quos ex corrupti non ea!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul KeTiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati debitis officia deserunt ullam nesciunt, rem veritatis quis qui soluta rerum accusantium illum odio distinctio earum voluptas delectus illo neque maxime. Sunt culpa, nobis, quaerat eligendi, repellat illum obcaecati quis recusandae dolorum quod inventore nostrum totam enim unde ratione iure praesentium assumenda vero perferendis. Dignissimos distinctio, exercitationem blanditiis dolorem id assumenda voluptates, atque nisi libero beatae rem optio eligendi, alias aperiam possimus culpa? Porro voluptates modi aut dolorum consectetur repudiandae earum culpa praesentium! Quod vero accusantium distinctio illum nihil esse quos ex corrupti non ea!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul KeEmpat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestiae laboriosam modi, cupiditate quaerat obcaecati debitis officia deserunt ullam nesciunt, rem veritatis quis qui soluta rerum accusantium illum odio distinctio earum voluptas delectus illo neque maxime. Sunt culpa, nobis, quaerat eligendi, repellat illum obcaecati quis recusandae dolorum quod inventore nostrum totam enim unde ratione iure praesentium assumenda vero perferendis. Dignissimos distinctio, exercitationem blanditiis dolorem id assumenda voluptates, atque nisi libero beatae rem optio eligendi, alias aperiam possimus culpa? Porro voluptates modi aut dolorum consectetur repudiandae earum culpa praesentium! Quod vero accusantium distinctio illum nihil esse quos ex corrupti non ea!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
