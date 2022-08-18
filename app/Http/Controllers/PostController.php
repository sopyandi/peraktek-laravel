<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function home()
    {
        return view('home' , [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        return view('about' , [
            "title" => "About"
        ]);
    }

    public function blog()
    {
        return view('blog' , [
            "title" => "Blog Post",
            "blog"  => Post::all()
        ]);
    }
    // method single post
    public function single($slug)
    {
        return view('blog' , [
            "title" => "Blog Post",
            "single_blog"  => Post::find($slug)
        ]);
    }
}
