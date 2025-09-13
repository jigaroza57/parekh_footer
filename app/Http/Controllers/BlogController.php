<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use File;

class BlogController extends Controller
{
    public function blog(){
  
        $blogs = Blog::all();
        return view('admin.blog',compact('blogs'));
     
     }
     public function add_blog(){
       
        return view('admin.add_blog');
     
     }
     public function store_blog(Request $request){

      $filename = time().'_blog.'.$request->file('image')->getClientOriginalExtension();  
      $request->file('image')->move(public_path('images/blog'), $filename);

       
        $blog = new Blog;
        $blog->title =  $request->title;
        $blog->image = $filename;
        $blog->detail =  $request->detail;
      
        $blog->save();
      
        return back()->with('success', 'Success! Data Stored');
      
     
     }
     public function edit_blog(Request $request, $id){
     
     
        $blog = Blog::find($id);
        return view('admin.edit_blog',compact('blog'));
     
     }
     public function delete_blog($id){
     
        $blog = Blog::find($id); 
        $destination = 'public/images/blog/'.$blog->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $blog->delete();
        return back()->with('success', 'Data Deleted');
     
     }
     public function update_blog(Request $request, $id){
     
        $blog = Blog::find($id); 

        if ($request->hasFile('image')) {
             $filename = time() . '_blog.' . $request->file('image')->getClientOriginalExtension();
             $request->file('image')->move(public_path('images/blog'), $filename);
             $blog->image = $filename;
         }
     
        $blog->title =  $request->title;
        $blog->detail =  $request->detail;
     
      
        $blog->save();
              
      return back()->with('success', 'Success! Data Updated');
     
       
     
     }
     
}
