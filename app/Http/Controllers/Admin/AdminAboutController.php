<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::All();
        return view('admin.about', compact('about'));
    }

    public function insert(Request $request)
    {
        $validate = $request->valodate([
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
        $validate = $request->valodate([
            'title' => 'string|required',
            'terbentuk' => 'string|required',
            'personil' => 'string|required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->gambar);
            $image = $request->file('gambar');
            $imageName = time() . '.' .$image->getClientOrginalExtention();
            $image->move(public_path('gambar'), $imageName);
            $request->merge(['gambar' => $imageName]);
        };

        About::findOrFail($id_about);
        About::update($validate);

        return redirect()->to('/admin/about')->with('success', 'Berhasil update data about');
    }
}
