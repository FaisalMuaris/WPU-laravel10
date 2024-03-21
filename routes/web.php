<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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


Route::get('/posts', [PostController::class,'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);



