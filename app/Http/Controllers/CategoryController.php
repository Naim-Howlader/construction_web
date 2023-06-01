<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Add Category";
        $url = url('/insert-category');
        $btn = 'Submit';
        $data = compact('title', 'url', 'btn');
        return view('add-category')->with($data);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = new Category;
        $category->category_name = $request['category_name'];
        $category->save();
        return redirect()->route('project');
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
        return redirect('project');
    }
    public function catEdit($id)
    {
        $category = Category::find($id);
        if (empty($category)) {
            return redirect('project');
        } else {
            $title = "Update Category";
            $url = url('/category-update') . '/' . $id;
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
        $category->category_name = $request['category_name'];
        $category->save();
        return redirect('project');
    }


}