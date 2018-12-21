<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class HomeController extends Controller
{
    const NUMBER_PAGINATION = 3;

    public function index(){
        $posts = Post::where('status', Post::IS_PUBLIC)->paginate(HomeController::NUMBER_PAGINATION);
        return view('pages.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('post'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->where('status', 1)->paginate(HomeController::NUMBER_PAGINATION);
        return view('pages.list', ['posts' => $posts]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->where('status', 1)->paginate(HomeController::NUMBER_PAGINATION);;
        return view('pages.list', ['posts' => $posts]);
    }
}
