<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;


class BlogController extends Controller
{
    public function index()
    {
        $blog = BlogPost::all();
        return view('blog.index', compact('blog'));
    }
    public function show(string $id)
{
    $blogPost = BlogPost::findOrFail($id);
    return view('blog.show', compact('blogPost'));
}


}
