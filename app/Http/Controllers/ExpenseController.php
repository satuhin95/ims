<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExpenseController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('expense.add_expense');
    }
    public function Save(Request $request){
    	$request->validate([
    		'details' => 'required',
    		'amount' => 'required',
    		'date' => 'required',
    		'month' => 'required',

    	]);
    	$data = array(
    		'details'=>$request->details,
    		'month'=>$request->month,
    		'date'=>$request->date,
    		'amount'=>$request->amount,
    	);

    	DB::table('expenses')->insert($data);
    	return Redirect()->back();
    }
    public function Day(){
    	$date = date('Y/m/d');
    	$expense = DB::table('expenses')
    		->where('date',$date)
    	->get();
    	return view('expense.day_expense',compact('expense'));
    }
    public function Month(){
       
            $month = date('F');
        $expense = DB::table('expenses')
            ->where('month',$month)
        ->get();
    		return view('expense.month_expense',compact('expense'));
    }
    public function Year(){
         $expense = DB::table('expenses')->get();
            return view('expense.yearly_expense',compact('expense'));
    }
    public function January(){
        $month = 'January';
        $expense = DB::table('expenses')
            ->where('month',$month)
        ->get();
            return view('expense.month_expense',compact('expense'));
    }
     public function February(){
        $month = 'February';
        $expense = DB::table('expenses')
            ->where('month',$month)
        ->get();
            return view('expense.month_expense',compact('expense'));
    }
}

