<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = Blog::paginate();
        return view('blogs', compact('blogPosts'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id);
        $post->load('category');
        return view('blogPost', compact('post'));
    }
}
