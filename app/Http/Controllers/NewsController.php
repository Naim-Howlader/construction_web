<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function addNews(){
        $categories = NewsCategory::get();
        $data = compact('categories');
        return view('add-news')->with($data);
    }
    public function insert(Request $request){
         $request->validate([
             'title' => 'required',
             'description' => 'required',
             'image' => 'required',
             'category' => 'required',
         ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = "uploads/images/";

        $request->image->move(public_path($destination), $image);
        $news = new News;
        $news->title = $request['title'];
        $news->description = $request['description'];
        $news->category_id = $request['category'];
        $news->image = $destination . $image;
        if($request->status == 'on'){
            $news->status = 'active';
        };
        $news->save();
        session()->flash('success', 'News created successfully');
        return redirect()->route('news');

    }
    public function destroy($id){
        $news = News::find($id);
        if(empty($news)){
            return redirect()->route('news');
        }
        $news->delete();
        session()->flash('success', 'News removed successfully');
        return redirect()->route('news');
    }
    public function edit($id){
        $news = News::find($id);
        if(empty($news)){
            return redirect()->route('news');
        }
        $categories = NewsCategory::get();
        $url = url('/news/update-news') . '/' .$id;
        $data = compact('news','categories', 'url');
        return view('update-news')->with($data);
    }
    public function update($id, Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',

            'category' => 'required',
        ]);
        $news = News::find($id);
        $news->title = $request['title'];
        $news->description = $request['description'];
        $news->category_id = $request['category'];
        if($request->hasFile('image')){
            $destination = 'uploads/images/'.$news->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image')->getClientOriginalName();
            $destination = "uploads/images/";
            $request->image->move(public_path($destination), $image);
            $news->image = $destination . $image;
        }
        if($request->status == 'on'){
            $news->status = 'active';
        }else{
            $news->status = 'inactive';
        }
        session()->flash('success', 'News updated successfully');
        $news->update();
        return redirect()->route('news');
    }
}
