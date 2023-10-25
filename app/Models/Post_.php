<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alif Fadilah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus, laboriosam molestias odit voluptatem cupiditate iste omnis doloremque tempora? Enim beatae nisi architecto asperiores! Minima quod assumenda repellat ducimus laboriosam totam nemo voluptatum animi aperiam nisi, sit, accusamus fugiat ratione necessitatibus ea! Error saepe reprehenderit itaque est impedit placeat vel praesentium ipsam molestias dolores quae, quibusdam atque nobis. Necessitatibus ipsa tempora, assumenda maxime minima, ut architecto beatae veritatis vitae amet nesciunt molestias totam, quis delectus animi tenetur eaque quisquam?"
        ],
        [
            "title" => "Judul Post Alif Fadilah",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Alif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis asperiores accusamus possimus assumenda quisquam ducimus architecto, consequuntur fugiat at ad illo magnam debitis, amet aspernatur quos quaerat temporibus expedita alias sapiente similique delectus. Veniam, corporis. Illo, explicabo reprehenderit. Sequi qui excepturi provident? Cupiditate officia, reiciendis labore eius laudantium assumenda animi quod aliquam minus deleniti illum recusandae sed quisquam similique corporis, natus et a harum, itaque dignissimos amet at eligendi molestiae. Culpa, suscipit accusantium maiores facere fugiat eaque et, iste facilis, velit recusandae praesentium. Autem molestias provident culpa, a quod consectetur magnam non incidunt aut impedit cumque nostrum doloremque deleniti pariatur?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);

    }
}
