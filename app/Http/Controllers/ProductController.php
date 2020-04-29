<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
class ProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('product.add_product');
    }

    public function All(){
    	$product = DB::table('products')
    	 ->join('catagories','products.cat_id','catagories.id')
    	 ->join('suppliers','products.sup_id','suppliers.id')
    	 ->select('products.*','catagories.cat_name','suppliers.name')
    	->get();
    	return view('product.all_product',compact('product'));
    }
    public function save(Request $request){
    	$request->validate([
    		'product_name' => 'required',
    		'cat_id' => 'required',
    		'sup_id' => 'required',
    		'product_code' => 'required',
    		'product_godaon' => 'required',
    		'product_route' => 'required',
    		'buy_date' => 'required',
    		'expire_date' => 'required',
    		'buying_price' => 'required',
    		'selling_price' => 'required'

    	]);
    	$data = array(
    	'product_name'=>$request->product_name, 
        'cat_id'=>$request->cat_id,
        'sup_id'=>$request->sup_id,
         'product_code'=>$request->product_code, 
         'product_godaon'=>$request->product_godaon,
         'product_route'=>$request->product_route,
         'buy_date'=>$request->buy_date,
         'expire_date'=>$request->expire_date,
         'buying_price'=>$request->buying_price,
         'selling_price'=>$request->selling_price,

    	);
    	// echo "<pre>";
    	// print_r($data);

    	$picture = $request->file('product_image');
    	if ($picture) {
    		$image_name = hexdec(uniqid());
    		$ext = strtolower($picture->getClientOriginalExtension());
    		$image_full_name =$image_name.'.'.$ext;
    		$upload_path = 'public/images/product/';
    		$image_url =  $upload_path.$image_full_name;
    		$success = $picture->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['product_image']= $image_url;
    			$product=  DB::table('products')->insert($data);	
    		}
    		if ($product) {
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
}
 public function ImportProduct(){
    return view('product.import_product');
 }

  public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
 public function Import(Request $request){
   Excel::Import(new ProductsImport,  $request->file('import_file'));
 }
 
}
