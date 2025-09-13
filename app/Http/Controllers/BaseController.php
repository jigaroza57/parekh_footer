<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General_detail;
use App\Models\Homepage_setting;
use App\Models\Home_slider;
use App\Models\About_slider;
use App\Models\Jewellery_detail;
use App\Models\Category;
use App\Models\Product;
use App\Models\Update;
use App\Models\Blog;
use App\Models\GetTouch;
use Validator;
use DB;
use Mail;

class BaseController extends Controller
{
    public function index(){

        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
        $slider = Home_slider::where('status',0)->get();
        $about_slider = About_slider::where('status',0)->get();
        $jewellery_detail = Jewellery_detail::first();
        $category = Category::where('parent_id',0)->get();
        $update = Update::all();
        $collection = Product::where('status',0)->get();

        return view('frontend.index',compact('detail','home_setting','slider','about_slider','jewellery_detail','category','update','collection'));
    }
   
   public function product(){

        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
        $slider = Home_slider::where('status',0)->get();
        $categories = Category::where('parent_id', 0)->with('subCatRecursive')->get();
        $products = Product::where('status', 0)->get();
        return view('frontend.product',compact('detail','home_setting','slider','categories','products'));
    }

    public function product_by_category($id)
{
    $detail = General_detail::first();
    $home_setting = Homepage_setting::first();
    $slider = Home_slider::where('status', 0)->get();
    $categories = Category::where('parent_id', 0)->with('subCatRecursive')->get();
    $products = Product::where('status', 0)->where('category_id', $id)->get();

    return view('frontend.product', compact('detail', 'home_setting', 'slider', 'categories', 'products'));
}


    public function product_detail($id){
       
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
        // $slider = Home_slider::where('status',0)->get();
        // $category = Category::where('parent_id',0)->get();
        $product = Product::where('id',$id)->first();
                              
                               
        return view('frontend.product_detail',compact('detail','home_setting','product'));
    }
    
   

    public function about_us(){

        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
        $about_slider = About_slider::where('status',0)->get();
       
        return view('frontend.about_us',compact('detail','home_setting','about_slider'));
    }

    public function contact_us(){

        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
      
       
        return view('frontend.contact_us',compact('detail','home_setting'));
    }
    public function update(){

        $update = Update::all();
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
      
       
        return view('frontend.update',compact('update','home_setting','detail'));
    }

    public function blog(){

        $blogs = Blog::all();
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
      
       
        return view('frontend.blog',compact('blogs','home_setting','detail'));
    }

    public function blog_detail($id){

        $blog = Blog::find($id);
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
        return view('frontend.blog_detail',compact('blog','home_setting','detail'));

    }
    public function getTouch(){

        $gets = GetTouch::all();
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();

        return view('frontend.getTouch',compact('gets','home_setting','detail'));
    }
    
    public function search(Request $request){

        $query = $request->input('query');

        $searchTerm = '%' . $query . '%';

        $exactProduct = Product::where('name', $query)->first();

        if ($exactProduct) {
            return redirect()->route('frontend.product_detail', ['id' => $exactProduct->id]);
        }


        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
                            ->where('products.status', 0)
                            ->where(function ($query) use ($searchTerm) {
                                $query->where('products.name', 'like', $searchTerm)
                                       
                                        ->orWhere('products.meta_title', 'like', $searchTerm)
                                        ->orWhere('categories.name', 'like', $searchTerm)
                                        ->orWhere('categories.meta_title', 'like', $searchTerm);
                            })
                           
                            ->select('products.*') // Select only product columns
                            ->get();      
                            
                            
        $detail = General_detail::first();
        $home_setting = Homepage_setting::first();
                    
        return view('/frontend/searchPage',compact('products','detail','home_setting'));
       
    }
    
     public function contact_form_process(Request $request){

    $validation = Validator::make($request->all(), [
        "name" => 'required',
        "email" => 'required|email|unique:contact_us_data,email',
        "message" => 'required',
    ]);

    if (!$validation->passes()) {
        return response()->json(['status' => 'error', 'msg' => $validation->errors()]);
    } else {
        $arr = [
            "name" => $request->name,
            "message" => $request->message,
            "email" => $request->email,
        ];
        $query = DB::table('contact_us_data')->insert($arr);
        if ($query) {
            

            $data = ['name' => $request->name,
                     'message_data' => $request->message, 
                     'email' => $request->email];

            $user['to'] = 'phjewellersweb@gmail.com';

            Mail::send('frontend/email_contact_form', $data, function ($message) use ($user) {
                $message->from('phjewellersweb@gmail.com', 'PHJwellers');
                $message->to($user['to']);
                $message->subject('New Contact Form Submitted');
            });
            
            return response()->json(['status' => 'success', 'msg' => "Thank You! We will connect with you soon."]);
                
          
        }
    }
}

}
