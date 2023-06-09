<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,',
            'category' => 'required'
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = "uploads/images/";

        $request->image->move(public_path($destination), $image);
        $gallery = new Gallery;
        $gallery->title = $request['title'];
        $gallery->category_id = $request['category'];
        $gallery->image = $destination . $image;
        if ($request->status == "on") {
            $gallery->status = 'active';
        }
        $gallery->save();
        $gallery = Gallery::with('category')->get();
        $category = Category::get();
        $data = compact('gallery', 'category');
        session()->flash('success', 'Gallery created successfully');
        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        //delete the gallery
        $gallery->delete();
        session()->flash('success', 'Gallery Removed Successfully!');
        //redirect to gallery page with success message
        return redirect()->route('gallery.index');
    }
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        if (empty($gallery)) {
            return view('project');
        }
        $url = url('/gallery/update-gallery') . '/' . $id;
        $category = Category::get();
        $data = compact('gallery', 'category', 'url');
        return view('update-gallery')->with($data);

    }
    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $gallery = Gallery::find($id);
        $gallery->title = $request['title'];
        $gallery->category_id = $request['category'];
        if ($request->hasFile('image')) {
            $destination = 'uploads/images/' . $gallery->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image')->getClientOriginalName();
            $destination = "uploads/images/";
            $request->image->move(public_path($destination), $image);
            $gallery->image = $destination . $image;
        }
        if ($request->status == "on") {
            $gallery->status = 'active';
        } else {
            $gallery->status = 'inactive';


        }
        session()->flash('success', 'Gallery updated successfully');
        $gallery->update();
        return redirect()->route('gallery.index');
    }

}