<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    public function UserRole(){
    	$user = DB::table('admins')->where('type',2)->get();
    	return view('admin.role.all_role',compact('user'));
    }

    public function UserCreate(){
    	return view('admin.role.create_role');
    }

    public function UserStore(Request $request){

    	$data = array();

    	$data['name'] = $request->name ;
    	$data['phone'] = $request->phone ;
    	$data['email'] = $request->email ;
    	$data['password'] = Hash::make($request->password) ;

    	$data['category'] = $request->category ;
    	$data['coupon'] = $request->coupon ;
    	$data['product'] = $request->product ;
    	$data['orders'] = $request->orders ;

    	$data['blog'] = $request->blog ;
    	$data['other'] = $request->other ;
    	$data['reports'] = $request->reports ;
    	$data['user_role'] = $request->user_role ;
    	$data['return_order'] = $request->return_order ;

    	$data['contact'] = $request->contact ;
    	$data['product_comment'] = $request->product_comment ;
    	$data['setting'] = $request->setting ;
        $data['stock'] = $request->stock ;

    	$data['type'] = 2 ; // super Admin: type:1    // Anathor Admin Type:2

    	DB::table('admins')->insert($data);
    	$notification=array(
                        'messege'=>'Admin Added',
                        'alert-type'=>'success' 
                         );
        return Redirect()->back()->with($notification);

    }

    public function UserDelete($id){
    	DB::table('admins')->where('id',$id)->delete();
    	$notification=array(
                        'messege'=>'Admin Deleted',
                        'alert-type'=>'success' 
                         );
        return Redirect()->back()->with($notification);

    }

    public function UserEdit($id){
    	$user = DB::table('admins')->where('id',$id)->first();
    	return view('admin.role.edit_role',compact('user'));
    }

    public function UserUpdate(Request $request){

    	$id = $request->id ;

    	$data = array();

    	$data['name'] = $request->name ;
    	$data['phone'] = $request->phone ;
    	$data['email'] = $request->email ;


    	$data['category'] = $request->category ;
    	$data['coupon'] = $request->coupon ;
    	$data['product'] = $request->product ;
    	$data['orders'] = $request->orders ;

    	$data['blog'] = $request->blog ;
    	$data['other'] = $request->other ;
    	$data['reports'] = $request->reports ;
    	$data['user_role'] = $request->user_role ;
    	$data['return_order'] = $request->return_order ;

    	$data['contact'] = $request->contact ;
    	$data['product_comment'] = $request->product_comment ;
    	$data['setting'] = $request->setting ;
        $data['stock'] = $request->stock ;

    	DB::table('admins')->where('id',$id)->update($data);
    	$notification=array(
                        'messege'=>'Admin Updated',
                        'alert-type'=>'success' 
                         );
        return Redirect()->route('admin.all.user')->with($notification);
    }

    public function ProductStock(){
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();

        //return response()->json($product);
        return view('admin.stock.stock',compact('product'));  
    }
}
