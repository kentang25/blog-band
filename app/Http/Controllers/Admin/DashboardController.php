<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.dashboard', compact('blogs'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title'  => 'required|string',
            'slug'   => 'required|string|unique:tb_blog,slug',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string'
        ]);

        Blog::create($request->all());
    }
}