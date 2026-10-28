<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        return view('Blog', [
            'blogs' => Blog::latest()->paginate(2),
        ]);
    }

    public function detail(Blog $blog)
    {
        return view('Blogdetail',[
            'title' => $blog->title,
            'detail'  => $blog,
        ]);

        
    }
}
