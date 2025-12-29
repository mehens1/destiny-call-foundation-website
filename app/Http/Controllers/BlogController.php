<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = Blog::paginate();
        // return $blogPosts;
        return view('blogs', compact('blogPosts'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('blog_post', compact('post'));
    }
}
