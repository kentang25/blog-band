<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('Blog', [
            'blogs' => Blog::all()
        ]);
    }

    public function detail(blog $blog)
    {
        return view('Blogdetail',[
            'title' => $blog->title,
            'detail'  => $blog
        ]);
    }
}
