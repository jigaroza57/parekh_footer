<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetTouch;
use File;

class GetTouchController extends Controller
{
    public function getTouch(){
  
        $gets = GetTouch::all();
        return view('admin.getTouch',compact('gets'));
     
     }
     public function add_getTouch(){
       
        return view('admin.add_getTouch');
     
     }
     public function store_getTouch(Request $request){

        $filename = time().'_get.'.$request->file('image')->getClientOriginalExtension();  
        $request->file('image')->move(public_path('images/get'), $filename);

       
        $get = new GetTouch;
        $get->image =  $filename;
        $get->link =  $request->link;
      
        $get->save();
      
        return back()->with('success', 'Success! Data Stored');
      
     
     }
    //  public function edit_blog(Request $request, $id){
     
     
    //     $blog = Blog::find($id);
    //     return view('admin.edit_blog',compact('blog'));
     
    //  }
     public function delete_getTouch($id){
     
        $get = GetTouch::find($id); 
        $destination = 'public/images/get/'.$get->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $get->delete();
        return back()->with('success', 'Data Deleted');
     
     }
    //  public function update_blog(Request $request, $id){
     
    //     $blog = Blog::find($id); 
    // if ($request->hasFile('image')) {
    //     $filename = time() . '_get.' . $request->file('image')->getClientOriginalExtension();
    //     $request->file('image')->move(public_path('images/get'), $filename);
    //     $category->image = $filename;
    // }

    //     $blog->title =  $request->title;
    //     $blog->detail =  $request->detail;
     
      
    //     $blog->save();
              
    //   return back()->with('success', 'Success! Data Updated');
     
       
     
    //  }
}
