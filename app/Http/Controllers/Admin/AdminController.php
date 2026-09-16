<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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

    public function edit(Request $request, $id_blog)
    {
        $blog = Blog::findOrFail($id_blog);
        return view('admin.editData', compact('blog'));
    }

    public function update(Request $request, Blog $blog, $id_blog)
    {
        $validate = $request->validate([
            'title'  => 'required|string',
            'slug'   => [
                'required',
                'string',
                Rule::unique('tb_blog', 'slug')->ignore($id_blog, 'id_blog')
            ],
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string'
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->gambar);
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }

        $blog = Blog::findOrFail($id_blog);
        $blog->update($validate);

        return redirect()->to('/dashboard')->with('success', 'Blog berhasil diperbarui');
    }

    public function delete(Request $request, $id_blog)
    {
        $blog = Blog::findOrFail($id_blog);
        $blog->delete();

        return redirect()->to('/dashboard')->with('success', 'Blog berhasil dihapus');
    }

}