<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function sliderView(){
        $sliders= Slider::latest()->get();
        $data = compact('sliders');
        return view('slider.slider')->with($data);
    }
    public function addSlider(){
        return view('slider.add-slider');
    }
    public function insertSlider(Request $request){
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
            'color' => 'required',
            'video_link' => 'required',
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination), $image);
        $slider = new Slider();
        $slider->title = $request['title'];
        $slider->sub_title = $request['sub_title'];
        $slider->image = $destination.$image;
        $slider->color = $request['color'];
        $slider->video_link = $request['video_link'];
        $slider->save();
        session()->flash('success', 'Slider created successfully');
        return redirect()->route('slider');
    }
    public function editSlider($id){
        $slider = Slider::find($id);
        if(empty($slider)){
            return redirect()->route('slider');
        }else{
            $url = url('/admin/slider/update-slider').'/'.$id;
            $data = compact('slider','url');
            return view('slider.edit-slider')->with($data);
        }
    }
    public function updateSlider($id, Request $request){
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            //'image' => 'required',
            'color' => 'required',
            'video_link' => 'required',
        ]);
        $slider = Slider::find($id);
        if(empty($slider)){
            return redirect()->route('slider');
        }else{
            $slider->title = $request['title'];
            $slider->sub_title = $request['sub_title'];
            $slider->color = $request['color'];
            $slider->video_link = $request['video_link'];
            if($request->hasFile('image')){
                $destination = 'uploads/images/'.$slider->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $image = $request->file('image')->getClientOriginalName();
                $destination = 'uploads/images/';
                $request->image->move(public_path($destination),$image);
                $slider->image = $destination.$image;
            }
            $slider->update();
            session()->flash('success', 'Slider Updated successfully');
            return redirect()->route('slider');
        }
    }
    public function deleteSlider($id){
        $slider = Slider::find($id);
        if(empty($slider)){
            return redirect()->route('slider');
        }else{
            $slider->delete();
            session()->flash('success', 'Slider Deleted successfully');
            return redirect()->route('slider');
        }

    }
}

