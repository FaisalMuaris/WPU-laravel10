<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {

    return view('about', [
        'name' => 'Faisal Muaris',
        'email' => 'faisal.muaris.fm@gmail.com',
        'alamat' => 'Ciamis',
        'image' => '1.jpg',
        'title' => 'About'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Faisal Muaris',
            'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Arif Lukmanulhakim',
            'body' =>  'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni eligendi quisquam provident totam? Beatae sunt quo veritatis, provident culpa eius temporibus et neque nobis amet dolorem ab incidunt '
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});


// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post ){
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' =>$new_post
    ]);
});



