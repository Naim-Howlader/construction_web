<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->latest()->get();
        $galleries = Gallery::with('category')->where('status', 'active')->take(12)->get();
        return view('frontend.index', ['categories' => $categories,'galleries'=>$galleries]);
    }
    public function news(){
        return view('frontend.news');
    }
}