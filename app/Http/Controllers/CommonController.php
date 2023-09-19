<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->latest()->get();
        $galleries = Gallery::with('category')->where('status', 'active')->take(12)->get();
        $news = News::where('status', 'active')->latest()->take(3)->get();
        $sliders = Slider::latest()->get();
        return view('frontend.index', ['categories' => $categories, 'galleries' => $galleries, 'news' => $news, 'sliders' => $sliders]);
    }
    public function news($id)
    {
        $news = News::find($id);
        $news2 = News::where('status', 'active')->latest()->take(3)->get();
        $newscat = NewsCategory::where('status', 'active')->latest()->get();
        $title = "News";
        $data = compact('title','news','news2', 'newscat');
        return view('frontend.news')->with($data);
    }
    public function allNews(){
        $news = News::where('status', 'active')->latest()->paginate(3);
        $news2 = News::where('status', 'active')->latest()->take(3)->get();
        $newscat = NewsCategory::where('status', 'active')->latest()->get();
        $title = "News";
        $data = compact('title','news','news2', 'newscat');
        return view('frontend.all-news')->with($data);
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
