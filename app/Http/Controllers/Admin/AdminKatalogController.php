<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Katalog;

class AdminKatalogController extends Controller
{
    public function index()   
    {
        $katalog = Katalog::all();
        return view('admin.katalog', compact('katalog'));
    }
}
