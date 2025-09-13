<?php

namespace App\Http\Controllers;
use App\Models\Home_slider;
use File;


use Illuminate\Http\Request;

class Home_sliderController extends Controller
{
    public function index(){

        $slider = Home_slider::all();
 
        return view('admin.home_slider',compact('slider'));
    }

    public function create(){

        
        return view('admin.add_home_slider');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
       
        $imagename = time().'_slider.'.$request->file('image')->getClientOriginalExtension();  
        $request->file('image')->move(public_path('images/slider'), $imagename);
        $imageOriginal_name =   $request->file('image')->getClientOriginalName();


        $slider = new Home_slider;
        $slider->image =  $imagename;
        $slider->image_originalname =  $imageOriginal_name;

        $slider->save();
      
        return back()->with('success', 'Success! Data Updated');
    }

    public function edit($id){
       
       $slider = Home_slider::find($id); 
        return view('admin.update_home_slider',compact('slider'));
    }

    public function update(Request $request){
       
        $id = $request->id;
        $slider = Home_slider::find($id); 

        $filename = time().'_slider.'.$request->file('image')->getClientOriginalExtension();  
        $request->file('image')->move(public_path('images/slider'), $filename);
        $originalname =   $request->file('image')->getClientOriginalName();

          $slider = Home_slider::find($id); 
          $slider->image      = $filename;
          $slider->image_originalname   = $originalname ;
          $slider->status = $request->status;
          $slider->save();
                
        return back()->with('success', 'Success! Data Updated');

       
     }

     public function delete($id){
       
        
        $slider = Home_slider::find($id); 
        $destination = 'public/images/slider/'.$slider->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $slider->delete();
        return back()->with('success', 'Data Deleted');
     }
}
