<?php

namespace App\Http\Controllers;
use App\Models\NewsCategory;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function newsView(){
        $category = NewsCategory::latest()->get();
        $data = compact('category');
        return view('news')->with($data);
    }
    public function addNewsCat(){
        return view('add-news-category');
    }
    public function insert(Request $request){
        $request->validate([
           'category_name' => 'required',
        ]);
        $category = new NewsCategory;
        $category->category_name = $request['category_name'];
        $category->save();
        session()->flash('success', 'Category has been created');
        return redirect()->route('news');
    }
}
