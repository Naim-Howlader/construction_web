<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use App\Models\News;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function newsView()
    {
        $category = NewsCategory::latest()->get();
        $news = News::latest()->with('category')->get();
        $data = compact('category', 'news');
        return view('news')->with($data);
    }
    public function addNewsCat()
    {

        $title = "Add Category";
        $btn = "Submit";
        $url = route('category.insert');
        $data = compact('title', 'btn', 'url');
        return view('add-news-category')->with($data);
    }
    public function insert(Request $request)
    {

        $request->validate([
            'news_category_name' => 'required',
        ]);
        $category = new NewsCategory;
        $category->category_name = $request['news_category_name'];
        if ($request->status == 'on') {
            $category->status = 'active';
        }
        $category->save();
        session()->flash('success', 'Category created successfully');
        return redirect()->route('news');
    }
    public function destroy($id)
    {
        $category = NewsCategory::find($id);
        if (empty($category)) {
            return redirect()->route('news');
        }
        $category->delete();
        session()->flash('success', 'Category removed successfully');
        return redirect('news');
    }
    public function edit($id)
    {
        $category = NewsCategory::find($id);
        if (empty($category)) {
            return redirect()->route('news');
        }
        $title = "Edit Category";
        $btn = "Update";
        $url = route('category.update', ['id' => $id]);
        $data = compact('category', 'title', 'btn', 'url');
        return view('add-news-category')->with($data);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'news_category_name' => 'required',
        ]);
        $category = NewsCategory::find($id);
        /* -------------------------- hiding all galleries -------------------------- */
        $news = DB::table('news')->where('category_id', $id);
        $category->category_name = $request['news_category_name'];
        if ($request->status == 'on') {
            $category->status = 'active';
        } else {
            $category->status = 'inactive';
            $news->update(['status' => 'inactive']);
        }
        ;
        $category->save();
        session()->flash('success', 'Category updated successfully');
        return redirect()->route('news');
    }
}