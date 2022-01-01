<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller {
    public function index() {
        $title = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name; 
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            // "posts" => Post::all() //Kalo property static, pake self::, Kalo property biasa, pake $this->
            // "posts" => Post::latest()->get(),
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(), // lakukan pencarian dulu dgn keyword diatas baru data di get.
            "active"    => "posts"
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post"  => $post,
            "active"    => "posts"
        ]);
    }

    // public function show($id) {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post"  => Post::find($id),
    //     ]);
    // }
}