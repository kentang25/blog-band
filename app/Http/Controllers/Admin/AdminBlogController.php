<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::All();
        return view('admin.blog', compact('blogs'));
    }

    public function insert(Request $request)
    {
        $validate = $request->validation([
            'title' => 'string|required',
            'slug' => 'string|required|unique:tb_blog.slug',
            'content' => 'string|required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
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
        return redirect()->to('admin/blog')->with('success', 'Berhasil ditambkan');
    }

    public function edit(Request $request, $id_blog)
    {
        $blog = Blog::findOrFail($id_blog);
        return view('admin.editBlog', compact('blog'));
    }

    public function update(Request $request, $id_blog)
    {
        $validate = $request->validate([
            'title' => 'string|required',
            'slug' => [
                'required',
                'string',
                Rule::unique('tb_blog', 'slug')->ignore($id_blog, 'id_blog')
            ],
            'content' => 'string|required',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->gambar);
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtention();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }else{
            $request->merge(['gambar' => null]);
        }

        $blog = Blog::findOrFail($validate);
        $blog->update($validate);

        return redirect()->to('admin/blog')->with('success', 'Berhasil diupdate');
    }

    public function delete($id_blog)
    {
        $blog = Blog::findOrFail($id_blog);
        $blog->delete($id_blog);

        return redirect()->to('admin/blog')->with('success', 'Berhasil dihapus');
    }
}
