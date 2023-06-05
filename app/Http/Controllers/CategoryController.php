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
        $url = url('/insert-category');
        $btn = 'Submit';
        $data = compact('title', 'url', 'btn');
        return view('add-category')->with($data);
    }

    public function insert(Request $request)
    {
        // return $request->all();
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = new Category;
        $category->category_name = $request['category_name'];
        if ($request->status == "on") {
            $category->status = 'active';
        }
        session()->flash('success', 'Category created successfully');
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
        session()->flash('success', 'Category removed successfully');
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
        return redirect('project');
    }


}
