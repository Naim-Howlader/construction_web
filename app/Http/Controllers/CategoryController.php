<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Add Category";
        $url = route('insert-category');
        $btn = 'Submit';
        $data = compact('title', 'url', 'btn');
        return view('add-category')->with($data);
    }

    public function insert(Request $request)
    {

        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);
        $category = new Category;
        $category->category_name = $request['category_name'];
        if ($request->status == "on") {
            $category->status = 'active';
        }
        session()->flash('success', 'Category created successfully');
        $category->save();
        return redirect()->route('gallery.index');
    }
    public function projectView()
    {
        $category = Category::latest()->get();
        $gallery = Gallery::get();
        $data = compact('category', 'gallery');
        return view('project')->with($data);
    }
    public function catDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('success', 'Category removed successfully');
        return redirect('gallery.index');
    }
    public function catEdit($id)
    {

        $category = Category::find($id);
        if (empty($category)) {
            return redirect('gallery.index');
        } else {
            $title = "Update Category";
            $url = route('update-category', ['id' => $id]);
            $btn = 'Update';
            $data = compact('title', 'url', 'category', 'btn');
            return view('add-category')->with($data);
        }
    }
    public function catUpdate($id, Request $request)
    {

        $request->validate([
            'category_name' => 'required',
        ]);
        $category = Category::find($id);
        /* -------------------------- hiding all galleries -------------------------- */
        $gallery = DB::table('galleries')->where('category_id', $id);

        $category->category_name = $request['category_name'];
        if ($request->status == "on") {
            $category->status = 'active';
        } else {
            $category->status = 'inactive';

            $gallery->update(['status' => 'inactive']);
        }
        session()->flash('success', 'Category updated successfully');
        $category->save();
        return redirect()->route('gallery.index');
    }


}