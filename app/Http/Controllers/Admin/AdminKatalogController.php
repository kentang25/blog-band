<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Katalog;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminKatalogController extends Controller
{
    public function index()   
    {
        $katalog = Katalog::all();
        return view('admin.katalog', compact('katalog'));
    }

    public function insert(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                // Rule::unique('tb_katalog', 'slug')->ignore($id_katalog),
            ],
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'size' => 'required|string|max:255',
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $validate['gambar'] = $imageName;
        }

        Katalog::create($validate);

        return redirect()->to('/admin/katalog')->with('success', 'Katalog berhasil ditambahkan');
    }

    public function edit(Request $request, $id_katalog){
        $katalog = Katalog::findOrFail($id_katalog);
        return view('admin.editKatalog', compact('katalog'));
    }

    public function update(Request $request, Katalog $katalog, $id_katalog)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                Rule::unique('tb_katalog', 'slug')->ignore($id_katalog, 'id_katalog'),
            ],
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'size' => 'required|string|max:255',
        ]);

        if($request->hasFile('gambar')){
            Storage::disk('public')->delete($request->gambar);
            $image = $request->file('gambar');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
            $validate['gambar'] = $imageName;
        }

        $katalog = Katalog::findOrFail($id_katalog);
        $katalog->update($validate);

        return redirect()->to('/admin/katalog')->with('success', 'Katalog berhasil diperbarui');
    }

    public function delete(Request $request, $id_katalog)
    {
        $katalog = Katalog::findOrFail($id_katalog);
        $katalog->delete();

        return redirect()->to('/admin/katalog')->with('success', 'Katalog berhasil dihapus');
    }
}
