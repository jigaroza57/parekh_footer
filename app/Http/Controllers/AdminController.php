<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Update;
use App\Models\Product;
use App\Models\Category;
use App\Models\General_detail;
use App\Models\Homepage_setting;
use App\Models\About_slider;
use App\Models\ContactUs;
use App\Models\Inquiry;
use App\Models\Jewellery_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Session;
use File;

class AdminController extends Controller
{

    public function index(Request $request)
    {
      if($request->session()->has('ADMIN_LOGIN')){

         return redirect('admin/dashboard');
   
      }else{
         return view('admin.login');
      } 
      // return view('admin.login');
    }

public function login(Request $request){


    $username = $request->post('username');
    $password = $request->post('password');


    $result = Admin::where(['username'=>$username])->first();
       if($result){
         if(Hash::check($request->post('password'),$result->password)){
           
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_ID',$result->id);
            return redirect('admin/dashboard');
           

         }else{
            $request->session()->flash('error','Please enter valid Password');
            return redirect('admin');
         }
      
      }else{
         $request->session()->flash('error','Please enter valid login details');
         return redirect('admin');
       }

}

public function dashboard(){

   $products = Product::all();
   $categories = Category::all();
    return view('admin.dashboard',compact('products','categories'));
}


public function contact_details(){

  $detail = General_detail::first();
 
   return view('admin.contact_details',compact('detail'));
}

public function contact_details_update(Request $request, $id){


        $detail                 = General_detail::findOrFail($id);
        
        $detail->address        = $request->address;
        $detail->address2       = $request->address2;
        $detail->phone          = $request->phone;
        $detail->fb_link        = $request->fb_link;
        $detail->insta_link     = $request->insta_link;
        $detail->whatsapp_link  = $request->whatsapp_link;

        $detail->save();
        
        return back()->with('success', 'Success! Data Updated');
}

public function home_setting(){

   $home_setting = Homepage_setting::first();
 
   return view('admin.home_setting',compact('home_setting'));
 
}

public function home_setting_update_logo(Request $request, $id){


   $request->validate([
      'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);

  $filename = time().'_logo.'.$request->file('logo')->getClientOriginalExtension();  
  $request->file('logo')->move(public_path('images'), $filename);
//   $request->file('logo')->getClientOriginalName();
  $home_setting  = Homepage_setting::findOrFail($id);
  $home_setting->logo      = $filename;
  $home_setting->save();
        
  return back()->with('success', 'Success! Data Updated');
  

  
}

Public function about_us(){

   $detail = General_detail::first();
   $about_slider = About_slider::all();
  
   return view('admin.about_us', compact('detail','about_slider'));
}

public function about_us_update(Request $request,$id){

   $detail                 = General_detail::findOrFail($id);
        
   $detail->about_us        = $request->about_us;

   $detail->save();
   
   return back()->with('success', 'Success! Data Updated');


}

public function add_about_slider(){

   return view('admin.add_about_slider');   
}

public function create_about_slider(Request $request){

   $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);
  $imagename = time().'_slider.'.$request->file('image')->getClientOriginalExtension();  
  $request->file('image')->move(public_path('images/about_slider'), $imagename);
  $imageOriginal_name =   $request->file('image')->getClientOriginalName();

  $about_slider = new About_slider;
  $about_slider->image =  $imagename;
  $about_slider->image_originalname =  $imageOriginal_name;

  $about_slider->save();

  return back()->with('success', 'Success! Data Updated');
}
public function edit_about_slider($id){
       
   $about_slider = About_slider::find($id); 
    return view('admin.update_about_slider',compact('about_slider'));
}

Public function update_about_slider(Request $request){

   

   $filename = time().'_slider.'.$request->file('image')->getClientOriginalExtension();  
   $request->file('image')->move(public_path('images/about_slider'), $filename);
   $originalname =   $request->file('image')->getClientOriginalName();

      $id = $request->id;
      $about_slider = About_slider::find($id); 
     $about_slider->image      = $filename;
     $about_slider->image_originalname   = $originalname ;
     $about_slider->status = $request->status;
     $about_slider->save();
           
   return back()->with('success', 'Success! Data Updated');

  
}

Public function delete_about_slider($id){

   $about_slider = About_slider::find($id); 
   $destination = 'public/images/about_slider/'.$about_slider->image;
   if(File::exists($destination)){
       File::delete($destination);
   }
   $about_slider->delete();
   return back()->with('success', 'Data Deleted');
}

public function home_setting_update_product_d(Request $request, $id){

   $home_setting  = Homepage_setting::findOrFail($id);
//   $home_setting->diamond      = $request->diamond;
   $home_setting->gold         = $request->gold;
   $home_setting->silver       = $request->silver;
   $home_setting->stone        = $request->stone;
   $home_setting->gift         = $request->gift;
   $home_setting->save();
         
   return back()->with('success', 'Success! Data Updated');

}

public function jewellery_section(){

   $jewellery_detail = Jewellery_detail::first();
   return view('admin.jewellery_section',compact('jewellery_detail'));

}

public function jewellery_section_detail(Request $request, $id){

   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->detail      = $request->detail;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  


}

public function jewellery_section_image1(Request $request, $id){


   $request->validate([
      'image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);

  $image_1 = time().'_img.'.$request->file('image_1')->getClientOriginalExtension();  
  $request->file('image_1')->move(public_path('images/jewellery'), $image_1);


   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_1      = $image_1;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function jewellery_section_image2(Request $request, $id){


   $request->validate([
      'image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);


  $image_2 = time().'_img.'.$request->file('image_2')->getClientOriginalExtension();  
  $request->file('image_2')->move(public_path('images/jewellery'), $image_2);



   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_2      = $image_2;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function jewellery_section_image3(Request $request, $id){


   $request->validate([
      'image_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);


  $image_3 = time().'_img.'.$request->file('image_3')->getClientOriginalExtension();  
  $request->file('image_3')->move(public_path('images/jewellery'), $image_3);



   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_3      = $image_3;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function jewellery_section_image4(Request $request, $id){


   $request->validate([
      'image_4' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);


  $image_4 = time().'_img.'.$request->file('image_4')->getClientOriginalExtension();  
  $request->file('image_4')->move(public_path('images/jewellery'), $image_4);



   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_4      = $image_4;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function jewellery_section_image5(Request $request, $id){


   $request->validate([
      'image_5' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);


  $image_5 = time().'_img.'.$request->file('image_5')->getClientOriginalExtension();  
  $request->file('image_5')->move(public_path('images/jewellery'), $image_5);



   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_5      = $image_5;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function jewellery_section_image6(Request $request, $id){

   $request->validate([
      'image_6' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
  ]);

  $image_6 = time().'_img.'.$request->file('image_6')->getClientOriginalExtension();  
  $request->file('image_6')->move(public_path('images/jewellery'), $image_6);

   $jewellery_detail  = Jewellery_detail::findOrFail($id);
   $jewellery_detail->image_6      = $image_6;
  
   $jewellery_detail->save();
         
   return back()->with('success', 'Success! Data Updated');
  

}
public function updates(){
  
   $update = Update::first();
   return view('admin.updates',compact('update'));

}
public function editstore_update(Request $request, $id){

   $update = Update::find($id); 
   $update->gold =  $request->gold;
   $update->silver =  $request->silver;
   $update->platinum =  $request->platinum;
 
   $update->save();
         
 return back()->with('success', 'Success! Data Updated');
}

public function contact_us_data(){
  
   $contact = ContactUs::orderBy('id', 'desc')->get();
   return view('admin.contact_us_data',compact('contact'));

}
public function inquiry(){
  
   $inquiry = Inquiry::orderBy('id', 'desc')->get();
   return view('admin.inquiry',compact('inquiry'));

}



   
}


