<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;

class GalleryController extends Controller
{
    public function addGallery()
    {
        $gallery = Gallery::with('category')->get();
        $category = Category::get();
        $data = compact('category', 'gallery');
        return view('add-gallery')->with($data);
    }
    public function insert(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required|mimes:jpeg,png,jpg,',
        //     'category' => 'required'
        // ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = "uploads/images/";

        $request->image->move(public_path($destination), $image);
        $gallery = new Gallery;
        $gallery->title = $request['title'];
        $gallery->category_id = $request['category'];
        $gallery->image = $destination . $image;
        $gallery->save();
        $gallery = Gallery::with('category')->get();
        $category = Category::get();
        $data = compact('gallery', 'category');
        session()->flash('success', 'Gallery has been created');
        return redirect()->route('project');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (Auth()->user() == null) {
            return redirect('/project')->with('error', 'Unauthorized Page');
        }

        //delete the gallery
        $gallery->delete();
        session()->flash('success', 'Gallery Removed Successfully!');
        //redirect to gallery page with success message
        return redirect('/project');
    }
}