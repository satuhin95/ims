<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;
class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function create(){
    	return view('employee.add_employee');
    }
    public function show(){
    	$employees = Employee::all();
    	return view('employee.all_employee',compact('employees'));
    }
    public function save(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'contact' => 'required|min:11',
    		'address' => 'required',
    		'salary' => 'required',
    		'vacation' => 'required',
    	]);
    	$data = array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'address'=>$request->address,
    		'salary'=>$request->salary,
    		'vacation'=>$request->vacation,
    		'experience'=>$request->experience
    	);
    	$picture = $request->file('picture');
    	if ($picture) {
    		$image_name = hexdec(uniqid());
    		// $image_name = str_random(5);
    		$ext = strtolower($picture->getClientOriginalExtension());
    		$image_full_name =$image_name.'.'.$ext;
    		$upload_path = 'public/images/employee/';
    		$image_url =  $upload_path.$image_full_name;
    		$success = $picture->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['picture']= $image_url;
    			$employee=  DB::table('employees')->insert($data);	
    		}
    		if ($employee) {
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
    	else{
    		$insert= DB::table('employees')->insert($data);
    		$notification = array(
    			'massege'=>'Insert Successfully',
    			'alert-type'=>'success'
    		);
    		return Redirect()->route('home')->with($notification);
    	}
    }
      public function delete($id){
      	$emp = DB::table('employees')->where('id',$id)->first();
    	DB::table('employees')->where('id',$id)->delete();
    	unlink($emp->picture);
    	return Redirect()->back();
    }
    public function view($id){
    	$employee=DB::table('employees')->where('id',$id)->first();
    	
    	return view('employee.view_employee',compact('employee'));
    }
    public function edit($id){
    	$emp=DB::table('employees')->where('id',$id)->first();
    	
    	return view('employee.edit_employee',compact('emp'));
    }

    public function update(Request $request , $id){
    	$data = array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'address'=>$request->address,
    		'salary'=>$request->salary,
    		'vacation'=>$request->vacation,
    		'experience'=>$request->experience
    	);
    	$picture = $request->file('picture');
    	if ($picture) {
    		$image_name = hexdec(uniqid());
    		$ext = strtolower($picture->getClientOriginalExtension());
    		$image_full_name =$image_name.'.'.$ext;
    		$upload_path = 'public/images/employee/';
    		$image_url =  $upload_path.$image_full_name;
    		$success = $picture->move($upload_path,$image_full_name);
    		if ($success) {
    			$emp = DB::table('employees')->where('id',$id)->first();
    			unlink($emp->picture);
    			$data['picture']= $image_url;
    			$employee=  DB::table('employees')->where('id',$id)->update($data);	
    		}
    		if ($employee) {
    			$notification = array(
    				'messege'=>'Update Successfully',
    				'alert-type'=>'success'
    			);
    			return Redirect()->route('home')->with($notification);
    		}
    		else{
    			$notification = array(
    				'messege'=>'Update Error',
    				'alert-type'=>'info'
    			);
    			return Redirect()->back()->with($notification);
    		}
    		
    	}
    	else{
    		$employee=  DB::table('employees')->where('id',$id)->update($data);	
    		$notification = array(
    			'massege'=>'Update Successfully',
    			'alert-type'=>'success'
    		);
    		return Redirect()->route('home')->with($notification);
    	}

    }

}


