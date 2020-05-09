<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{

    public function StoreNewsletter(Request $request)
    {

        //dd($request->all());

        $validateData = $request->validate([
            'email' => 'required|unique:newsletters|max:55',
        ]);

        $data = [];
        $data['email'] = $request->email;
        DB::table('newsletters')->insert($data);

        $notification = [
            'messege'    => 'Thanks For Subscribing',
            'alert-type' => 'success',
        ];

        return Redirect()->back()->with($notification);


    }

    // show orders view
    public function OrderView($id){
        $order = DB::table('orders')
                ->join('users','orders.user_id','users.id')
                ->select('orders.*','users.name','users.phone')
                ->where('orders.id',$id)
                ->first();
                // dd($order);
        $shipping = DB::table('shipping')->where('order_id',$id)->first();
        //dd($shipping);        

        $details = DB::table('orders_details')
                    ->join('products','orders_details.product_id','products.id')
                    ->select('orders_details.*','products.product_code','products.image_one')
                    ->where('orders_details.order_id',$id)
                    ->get();                
        return view('pages.profile_page_order_view',compact('order','shipping','details'));
    }

    public function OrderTracking(Request $request){
        $code = $request->code ;

        $track = DB::table('orders')->where('status_code',$code)->first();
        if($track){
            //echo "<pre>";
            //print_r($track);
            return view('pages.tracking',compact('track'));
        }else{
            $notification = [
            'messege'    => 'Invalid Status Code',
            'alert-type' => 'error',
        ];
        return Redirect()->back()->with($notification);
        }
    }
}