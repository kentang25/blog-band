<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index()
    {
        $abouts = About::All();
        return view('admin.about', compact('abouts'));
    }

    public function insert(Request $request)
    {
        $validate = $request->validate([
            'title' => 'string|required',
            'terbentuk' => 'string|required',
            'personil' => 'string|required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }else{
            $request->merge(['gambar' => null]);
        }

        About::create($validate);

        return redirect()->to('/admin/about')->with('success', 'Berhasil tambahkan data about');
    }

    public function edit(Request $request, $id_about)
    {
        $about = About::findOrFail($id_about);
        return view('admin.editAbout', compact('about'));
    }

    public function update(Request $request, $id_about)
    {
        $validate = $request->validate([
            'title' => 'string|required',
            'terbentuk' => 'string|required',
            'personil' => 'string|required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->gambar);
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        }

        $about = About::findOrFail($id_about);
        $about->update($validate);

        return redirect()->to('/admin/about')->with('success', 'Berhasil update data about');
    }

    public function delete(Request $request, $id_about)
    {
        $about = About::findOrFail($id_about);
        $about->delete($id_about);

        return redirect()->to('/admin/about')->with('success', 'Data About berhasil dihapus');
    }
}
