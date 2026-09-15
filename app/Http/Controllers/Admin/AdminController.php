<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.dashboard', compact('blogs'));
    }

    public function insert(Request $request)
    {
        $validate = $request->validate([
            'title'  => 'required|string',
            'slug'   => 'required|string|unique:tb_blog,slug',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string'
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }else{
            $request->merge(['gambar' => null]);
        }

        Blog::create($validate);

        return redirect()->route('/dashboard')->with('success', 'Blog berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title'  => 'required|string',
            'slug'   => 'required|string|unique:tb_blog,slug,' . $id,
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string'
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->oldImage);
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }

        $blog = Blog::findOrFail($id);
        $blog->update($validate);

        return redirect()->route('/dashboard')->with('success', 'Blog berhasil diperbarui');
    }

}