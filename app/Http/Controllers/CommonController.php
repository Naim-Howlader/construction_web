<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->latest()->get();
        $galleries = Gallery::with('category')->where('status', 'active')->take(12)->get();
        $news = News::where('status', 'active')->latest()->take(3)->get();
        return view('frontend.index', ['categories' => $categories, 'galleries' => $galleries, 'news' => $news]);
    }
    public function news()
    {
        return view('frontend.news');
    }
    public function projects()
    {
        $title = "Projects";
        $categories = Category::where('status', 'active')->latest()->get();
        $galleries = Gallery::with('category')->where('status', 'active')->get();
        $data = compact('categories', 'galleries','title');
        return view('frontend.projects', $data);
    }
}