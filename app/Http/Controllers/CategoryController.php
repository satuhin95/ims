<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
class CategoryController extends Controller
{
    	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index(){
		return view('category.add_category');
	}
	public function save(Request $request){

		$request->validate([
    		'cat_name' => 'required'

    	]);
    	$data['cat_name']=$request->cat_name;

    	DB::table('catagories')->insert($data);
    	return Redirect()->back();
	}
	public function All(){
		$catagory = DB::table('catagories')->get();
		return view('category.all_category',compact('catagory'));
	}


}
