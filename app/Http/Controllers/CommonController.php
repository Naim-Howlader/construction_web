<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->with('getGalleries')->latest()->take(6)->get();

        return view('frontend.index', ['categories' => $categories]);
    }
    public function news(){
        return view('frontend.news');
    }
}