<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $title = Setting::first()->site_name;
        $categories = Category::take(6)->get();
        $first_post = Post::latest()->first();
        $posts = Post::take(2)->get();
        $laravel_category = Category::find(3);
        $php_category = Category::find(4);
        $java_category = Category::find(7);
        return view('index',
            ['title' => $title,
                'categories' => $categories,
                'first_post' => $first_post,
                'posts' => $posts,
                'laravel_category' => $laravel_category,
                'php_category' => $php_category,
                'java_category' => $java_category
            ]);
    }
}
