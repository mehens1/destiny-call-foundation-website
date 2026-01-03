<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = Blog::orderBy('created_at', 'desc')->paginate(10);

        return view('blogs', compact('blogPosts'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id);
        $post->load('category');
        return view('blogPost', compact('post'));
    }
}
