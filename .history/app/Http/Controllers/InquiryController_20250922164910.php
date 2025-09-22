<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Product;
use Mail;

class InquiryController extends Controller
{
    public function inquiry(Request $request, $id)
    {

        $inquiry = new Inquiry;
        $inquiry->product_id = $id;
        $inquiry->name = $request->name;
        $inquiry->mobile = $request->mobile;
        $inquiry->city = $request->city;
        $inquiry->message = $request->message;

        $query =  $inquiry->save();

        if ($query) {

            $product_name = Product::where('id', $id)->first();
            echo $product_name->name;
            $data = [
                'name' => $request->name,
                'product_name' => $product_name->name,
                'mobile' => $request->mobile,
                'city' => $request->city,
                'message_data' => $request->message,
            ];

            $user['to'] = 'phjewellersweb@gmail.com';

            Mail::send('frontend/email_inquiry_form', $data, function ($message) use ($user) {
                $message->from('phjewellersweb@gmail.com', 'PHJwellers');
                $message->to($user['to']);
                $message->subject('New Inquiry Form Submitted');
            });
        }

        return redirect()->back()->with('message', 'We will contact you soon');
    }
}
