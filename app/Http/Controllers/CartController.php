<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
class CartController extends Controller
{
      public function __construct()
    {
    	$this->middleware('auth');
    }

    public function Index(Request $request){
    	$data = array(
    		'id'=>$request->id,
    		'name'=>$request->name,
    		'qty'=>$request->qty,
    		'weight'=>0,
    		'price'=>$request->price
    		);
    	  $add = Cart::add($data);
    	return Redirect()->back();

    }
    public function Update(Request $request ,$rowId){
    	$qty = $request->qty;
    	$update = Cart::update($rowId, $qty);
    	return Redirect()->back();
    }
    public function Remove($rowId){
    	$remove = Cart::remove($rowId);
    	return Redirect()->back();
    }
    public function Invoice(Request $request){
    	$request->validate([
    		'customer_id' => 'required'
    	]);
    	$customer_id = $request->customer_id;

    	$data = Cart::content();
    	$customer = DB::table('customers')->where('id',$customer_id)->first();

    	 return view('invoice.invoice',compact('data','customer'));

    	 }
    	 public function FinalInvoice(Request $request){
    	 	$request->validate([
    		'payment_status' => 'required'
    	]);
    	 	$data = array(
    		'payment_status'=>$request->payment_status,
    		'pay'=>$request->pay,
    		'due'=>$request->due,
    		'customer_id'=>$request->customer_id,
    		'order_status'=>$request->order_status,
    		'total_product'=>$request->total_product,
    		'vat'=>$request->vat,
    		'sub_total'=>$request->subtotal,
    		'total'=>$request->total,
    		);



    		$order_id = DB::table('orders')->insertGetId($data);

    		$content = Cart::content();
    		$odata = array();
    		foreach ($content as  $row) {
    			$odata['order_id'] = $order_id;
    			$odata['product_id'] = $row->id;
    			$odata['quentity'] = $row->qty;
    			$odata['unitcost'] = $row->price;
    			$odata['total'] = $row->total;
    		$insert = DB::table('orderdetails')->insert($odata);
    		}
    		if ($insert) {
    			Cart::destroy();
    			return Redirect()->route('home');
    		}

    	 }
}
