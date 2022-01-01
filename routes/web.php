<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" =>  "home",
        "image" => "home.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>  "About",
        "name"  =>  "Agnes Emanuella Wagey",
        "email" =>  "agnes.ema.09@gmail.com",
        "image" =>  "agnes.jpg",
        "active" =>  "about",
        
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Route::get('/blog', function () {
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => Post::all() //Kalo property static, pake self::, Kalo property biasa, pake $this->
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
//Route::get('posts/{slug}', [PostController::class, 'show']);
// Route::get('posts/{slug}', function($slug) {
    
    
//     return view('post', [
//         "title" => "Single Post",
//         "post"  => Post::find($slug)
//     ]);
// });

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories'  => Category::all(),
        'active'    => 'categories'
    ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name" ,
        'posts' => $category->posts,
        'active'    => 'categories'
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('author', 'category'),
        'active'    => 'posts'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');