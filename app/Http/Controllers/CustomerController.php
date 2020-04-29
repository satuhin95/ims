<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
class CustomerController extends Controller
{
      public function __construct()
    {
    	$this->middleware('auth');
    }
    public function create(){
    	return view('customer.add_customer');
    }
    public function all(){
    	$customers = Customer::all();
    	return view('customer.all_customer',compact('customers'));
    }
    public function save(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'contact' => 'required|min:11',
    		'address' => 'required',

    	]);
    	$data = array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'address'=>$request->address,
    		'shopname'=>$request->shopname,
    		'acount_name'=>$request->acount_name,
    		'acount_number'=>$request->acount_number,
    		'bank_name'=>$request->bank_name,
    		'bank_branch'=>$request->bank_branch
    	);
    	$picture = $request->file('picture');
    	if ($picture) {
    		$image_name = hexdec(uniqid());
    		// $image_name = str_random(5);
    		$ext = strtolower($picture->getClientOriginalExtension());
    		$image_full_name =$image_name.'.'.$ext;
    		$upload_path = 'public/images/customer/';
    		$image_url =  $upload_path.$image_full_name;
    		$success = $picture->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['picture']= $image_url;
    			$employee=  DB::table('customers')->insert($data);	
    		}
    		if ($employee) {
    			$notification = array(
    				'messege'=>'Insert Successfully',
    				'alert-type'=>'success'
    			);
    			return Redirect()->back()->with($notification);
    		}
    		else{
    			$notification = array(
    				'messege'=>'Insert Error',
    				'alert-type'=>'info'
    			);
    			return Redirect()->back()->with($notification);
    		}
    		
    	}
    	else{
    		$insert= DB::table('customers')->insert($data);
    		$notification = array(
    			'massege'=>'Insert Successfully',
    			'alert-type'=>'success'
    		);
    		return Redirect()->route('home')->with($notification);
    	}
    }
}
