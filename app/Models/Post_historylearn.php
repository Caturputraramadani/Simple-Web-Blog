<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => " Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => " Chess",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, nihil velit sequi voluptas iure ipsum corrupti explicabo
                   molestiae qui itaque neque nisi odit sint beatae libero dolore impedit consectetur. Cum omnis neque perferendis ab
                   optio, aut adipisci dolorem, blanditiis dolores ipsam unde! Molestiae doloremque quas, magnam quisquam eligendi ullam
                   aliquam laboriosam doloribus consequuntur ducimus! Vero delectus non velit unde autem ex mollitia, saepe maiores
                   sapiente, nulla itaque quam. Culpa dolorum asperiores veritatis ad hic, alias quibusdam eligendi error molestiae
                   eveniet."
        ],
        [
            "title" => " Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => " Granger",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum explicabo eligendi id illum vel ipsa dolorum, ratione
                   laborum reiciendis corporis architecto voluptas ad, libero et soluta quibusdam quas voluptate ea vero veniam iste,
                   laboriosam eveniet. Eos, quas! Doloremque et libero alias deserunt nihil incidunt expedita similique pariatur
                   necessitatibus dolorem sequi hic enim saepe repellendus nemo nostrum laborum veniam voluptatibus debitis perspiciatis
                   dolor voluptas, odit soluta quos. Eius inventore dolore laboriosam laborum recusandae maiores nemo non suscipit libero
                   sed. Laudantium quasi, vero nemo quaerat totam praesentium iure quo dignissimos consequatur laborum dolores sequi,
                   repellat aliquam voluptatibus officia quae illum reprehenderit corporis."
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
