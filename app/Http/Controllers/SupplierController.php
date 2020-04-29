<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Supplier;
class SupplierController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('supplier.add_supplier');
    }
      public function all(){
      	$suppliers = Supplier::all();
    	return view('supplier.all_supplier',compact('suppliers'));
    }
     public function edit($id){
      	$supplier = DB::table('suppliers')->where('id',$id)->first();
    	return view('supplier.edit_supplier',compact('supplier'));
    }
    public function save(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'contact' => 'required|min:11',
    		'shop' => 'required',
    		'type' => 'required',


    	]);
    	$data = array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'address'=>$request->address,
    		'shop'=>$request->shop,
    		'type'=>$request->type,
    		'acount_name'=>$request->acount_name,
    		'acount_number'=>$request->acount_number,
    		'bank_name'=>$request->bank_name,
    		'bank_branch'=>$request->bank_branch
    	);

    		$success=  DB::table('suppliers')->insert($data);	
    	
    		if ($success) {
    			$notification = array(
    				'messege'=>'Insert Successfully',
    				'alert-type'=>'success'
    			);
    			return Redirect()->route('home')->with($notification);
    		}
    		else{
    			$notification = array(
    				'messege'=>'Insert Error',
    				'alert-type'=>'info'
    			);
    			return Redirect()->back()->with($notification);
    		}
    		
    	}
    	public function update(Request $request, $id){
    			$request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'contact' => 'required|min:11',
    		'shop' => 'required',
    		'type' => 'required',


    	]);
    	$data = array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'address'=>$request->address,
    		'shop'=>$request->shop,
    		'type'=>$request->type,
    		'acount_name'=>$request->acount_name,
    		'acount_number'=>$request->acount_number,
    		'bank_name'=>$request->bank_name,
    		'bank_branch'=>$request->bank_branch
    	);

    		$success=  DB::table('suppliers')->where('id',$id)->update($data);	
    	
    		if ($success) {
    			$notification = array(
    				'messege'=>'Insert Successfully',
    				'alert-type'=>'success'
    			);
    			return Redirect()->route('home')->with($notification);
    		}
    		else{
    			$notification = array(
    				'messege'=>'Insert Error',
    				'alert-type'=>'info'
    			);
    			return Redirect()->back()->with($notification);
    		}
    		
    	}
    	
    }

