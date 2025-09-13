<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use File;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('admin.product', compact('products'));
    }
    
   
    public function add_product()
    {
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }

   
    public function store(Request $request)
    {
       
       
        $filename = time().'_p.'.$request->file('image')->getClientOriginalExtension();  
        $request->file('image')->move(public_path('images/product'), $filename);

        $images = array();
        
        if($files=$request->file('images')){
          
            foreach($files as $file){
            
                $imagename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/product'), $imagename);  
                $images[] = $imagename; 
               
            }
        }

        $product = new Product;
        $product->name = $request->name;
        $product->image = $filename;
        $product->images = implode('|', $images);
        // $product->price = $request->price;
        $product->karat = $request->karat;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->meta_title = $request->meta_title;
        $product->status = $request->status;

        // $product->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        $product->save();


        return redirect()->route('admin.product')->with('success', 'Success! product Added');
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $destination = 'public/images/product/'.$product->image;
        if(File::exists($destination)){
            File::delete($destination);
        }

        foreach(explode('|', $product->images) as $img){
            $dest_images = 'public/images/product/'.$img;
            if(File::exists($dest_images)){
                File::delete($dest_images);
            }
        }
        $product->delete();
        return back()->with('success', 'Data Deleted');
    }

    public function edit($id){

        $product = Product::findOrFail($id);
        $categories = Category::all();
       
        return view('admin.update_product',compact('product','categories'));

    }

    public function update(Request $request, $id){

        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            $filename = time().'_p.'.$request->file('image')->getClientOriginalExtension();  
            $request->file('image')->move(public_path('images/product'), $filename);
            $product->image = $filename;
    }

        $images = array();
        if ($request->hasFile('images')) {
             if ($files = $request->file('images')) {
                foreach ($files as $file) {
                    $imagename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/product'), $imagename);
                    $images[] = $imagename;
                }
            }
            $product->images = implode('|', $images);
        }

        $product->name = $request->name;
       
       
        // $product->price = $request->price;
        $product->weight = $request->weight;
        $product->karat = $request->karat;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->meta_title = $request->meta_title;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('admin.product')->with('success', 'Success! Product Updated');

    }
}
