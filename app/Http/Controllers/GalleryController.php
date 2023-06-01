<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;

class GalleryController extends Controller
{
    public function addGallery(){
        $gallery = Gallery::with('category')->get();
        $category = Category::get();
        $data = compact('category', 'gallery');
        return view('add-gallery')->with($data);
    }
    public function insert(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'category' => 'required'
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $image);
        $gallery = new Gallery;
        $gallery->title = $request['title'];
        $gallery->category_id = $request['category'];
        $gallery->image = $image;
        $gallery->save();
        $gallery = Gallery::with('category')->get();
        $category = Category::get();
        $data = compact('gallery', 'category');
        //header("Refresh:0");
        return view('project')->with($data);
    }
}
