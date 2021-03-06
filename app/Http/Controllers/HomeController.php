<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    public function homeSlider (){
        $sliders=Slider::Latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function addSlider(Request $request){

        return view('admin.slider.create');
    }
    public function storeSlider(Request $request){

        $slider_image =  $request->file('image');


        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);

        $last_img = 'image/slider/'.$name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.slider')->with('success','Slider Inserted Successfully');
    }

}
