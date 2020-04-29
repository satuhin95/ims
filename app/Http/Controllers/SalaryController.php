<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SalaryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function advanced(){
		$emp = DB::table('employees')->get();
		return view('salary.advanced_salary',compact('emp'));
	}
	public function index(){
		$emp = DB::table('employees')->get();
		return view('salary.pay_salary',compact('emp'));
	}
	public function AllAdvanced(){
		$advanced = DB::table('advanced_salary')
			->join('employees','advanced_salary.emp_id','employees.id')
			->select('advanced_salary.*','employees.name','employees.salary')
			->get();
		return view('salary.all_advanced_salary',compact('advanced'));
	}
	public function SaveAdvanced(Request $request){
		$emp_id = $request->emp_id;
		$month = $request->month;
		$old = DB::table('advanced_salary')
		->where('emp_id',$emp_id)
		->where('month',$month)
		->first();

		if ($old) {
			$notification = array(
				'messege'=>' You Have Advanced!!',
				'alert-type'=>'info'
			);
		}	
		else{

			$data = array(
				'emp_id'=>$request->emp_id,
				'month'=>$request->month,
				'year'=>$request->year,
				'amount'=>$request->amount,

			);

			$success=  DB::table('advanced_salary')->insert($data);	

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
}
