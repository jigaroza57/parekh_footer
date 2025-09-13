<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return view('admin.category', compact('categories'));
    }

   
    public function add_category()
    {
        $categories = Category::with('subCatRecursive')->where('parent_id',0)->get();

        return view('admin.add_category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time().'_cat.'.$request->file('image')->getClientOriginalExtension();  
        $request->file('image')->move(public_path('images/category'), $filename);

        $category = new Category;
        $category->parent_id = $request->parent_id;
        $category->name = $request->name;
        $category->image = $filename;
        $category->meta_title = $request->meta_title;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        $category->save();


        return redirect()->route('admin.category')->with('success', 'Success! Categiory Added');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $destination = 'public/images/category/'.$category->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $category->delete();
        return back()->with('success', 'Data Deleted');
    }

    public function edit($id){

        $category = Category::findOrFail($id);
        $p_id = Category::where('id', $category->parent_id)->first();
        $categories = Category::with('subCatRecursive')->where('parent_id',0)->get();

        return view('admin.update_category',compact('category','categories','p_id'));

    }

    public function update(Request $request, $id){

        $category = Category::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $filename = time() . '_cat.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/category'), $filename);
            $category->image = $filename;
        }

        $category->parent_id  = $request->parent_id;
        $category->name       = $request->name;
       
        $category->meta_title = $request->meta_title;
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Success! Categiory Updated');

    }
   
}
