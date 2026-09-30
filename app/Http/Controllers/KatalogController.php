<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = Katalog::all();
        return view('katalog', compact('katalog'));
    }
    
}
