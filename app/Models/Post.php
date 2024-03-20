<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory;

   private static $blog_posts = [
    [
        'title' => 'Judul Post Pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Faisal Muaris',
        'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nostrum quod placeat facilis fuga? Ullam deleniti ipsam explicabo, sunt repudiandae perferendis animi eveniet, dignissimos sint voluptatibus in quam libero omnis quaerat molestias quis suscipit saepe, mollitia inventore a ad veniam.'
    ],
    [
        'title' => 'Judul Post Kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'Arif Lukmanulhakim',
        'body' =>  'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni eligendi quisquam provident totam? Beatae sunt quo veritatis, provident culpa eius temporibus et neque nobis amet dolorem ab incidunt consequuntur architecto eos exercitationem in corporis repellat praesentium assumenda minus. Distinctio pariatur culpa beatae quis deserunt nihil quo laudantium placeat, perferendis, ea vitae iusto incidunt consequatur dolores fugit blanditiis error aliquam tenetur?'
    ],
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
