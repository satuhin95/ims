<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Index(){
    	$product = DB::table('products')
    		->join('catagories','products.cat_id','catagories.id')
    		->select('catagories.cat_name','products.*')
    	->get();
    	$cst = DB::table('customers')->get();
    	return view('pos.pos',compact('product','cst'));
    }
    public function Pending(){

        $pending = DB::table('orders')
        ->join('customers','orders.customer_id','customers.id')
        ->select('customers.name','orders.*')
        ->where('order_status','pending')
        ->get();

  
        return view('pos.pending',compact('pending'));
    }
    public function View($id){
        $orders = DB::table('orders')
        ->join('customers','orders.customer_id','customers.id')
        ->where('orders.id',$id)
        ->first();
        $orders_details = DB::table('orderdetails')
        ->join('products','orderdetails.product_id','products.id')
        ->select('orderdetails.*','products.product_name','products.product_code')
        ->where('order_id',$id)
        ->get();

        return view('pos.order_confirmation',compact('orders','orders_details'));
    }
    public function Done($id){
        // $update = DB::table('orders')->where('id',$id)->update(['order_status'=>'approve']);
        // if ($update) {
        //     return Redirect()->route('home');
        // }
        // else{
        //     echo "Error";
        // }
        echo "$id";
        
    }
}
