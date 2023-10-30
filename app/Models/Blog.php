<?php

namespace App\Models;

class Blog {
    private static $post_blogs = [
        [
            'judul' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Faqih Firdaus",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur a illo ipsam commodi tenetur rerum cupiditate. Exercitationem, labore voluptatum ipsum cum excepturi dolor iure sint consequatur numquam libero ex laudantium sit ipsa esse nisi, dolorum expedita possimus beatae, maxime veniam a pariatur eos impedit. Incidunt mollitia laboriosam dolorum odio harum ratione, quo, quod quibusdam expedita asperiores fugit exercitationem voluptatum ex rerum neque, suscipit at eveniet corrupti repellat accusamus dicta! Sequi accusamus voluptatum voluptate, aut animi provident laboriosam molestias incidunt ullam."
        ],
        [
            'judul' => "Judul Post Kedua",
            'slug' => "judul-post-kedua",
            'author' => "Tiara Fairuz",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde provident aperiam ut vero odit voluptatibus quaerat amet velit, labore eos corporis dolor consequuntur est iusto omnis! Sequi sint impedit quis ullam pariatur, voluptatum officiis? In recusandae velit corrupti non dolore nesciunt sequi temporibus sed eveniet iste, commodi officiis quia, dolores ullam libero aliquam sint ipsum veritatis maxime aut necessitatibus? Obcaecati architecto saepe minima magnam, odio aliquid corrupti itaque aliquam dolorum fugit sunt natus enim sit asperiores ullam. Debitis dolor numquam reiciendis tenetur perspiciatis aliquam ab ipsum, placeat nemo modi error ipsa cumque molestiae quae nulla officia id maxime consequatur alias."
        ]
    ];

    public static function all() {
        return collect(self::$post_blogs);
    }
    public static function find($slug) {
        $post_blogs = static::all();
        return $post_blogs->firstWhere('slug', $slug);
    }
}
