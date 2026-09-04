<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Katalog;
class HomeController extends Controller
{
    public function index()
    {
        // return view('Home',[
        //     'home' => Blog::all()
        // ]);

        return view('Home', [
            'home' => Blog::latest()->take(3)->get(),
            'katalog' => Katalog::latest()->take(4)->get()
        ]);
    }
}
