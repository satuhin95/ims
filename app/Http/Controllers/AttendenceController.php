<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attendence;
class AttendenceController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$emp = DB::table('employees')->get();
    	return view('attendence.add_attendence',compact('emp'));
    }
    public function Save(Request $request){
    	// return $request->all();
    	$date = $request->date;
    	$check = DB::table('attendences')->where('date',$date)->first();
    	if ($check) {
    		echo "Attendence Already Inserted";
    		return Redirect()->back();
    	}
    	else{
    		foreach ($request->emp_id as $id) {
    		$data[] = [
    			"emp_id"=>$id,
    			"status"=>$request->attendence[$id],
    			"date"=>$request->date,
                "year"=>$request->year,
    			"month"=>$request->month,
    			"edit_date"=>date('d_m_y')
    			];
    		
    	}

    	$success = DB::table('attendences')->insert($data);
        return Redirect()->back();

    	}
    	
    }
    public function All(){
    	$data = DB::table('attendences')->select('edit_date')->groupBy('edit_date')->get();
    	return view('attendence.all_attendence',compact('data'));
    }
    public function Edit($edit_date){
        $date = DB::table('attendences')->where('edit_date',$edit_date)->first();
      $data = DB::table('attendences')->where('edit_date', $edit_date)
       ->join('employees','attendences.emp_id','employees.id')
      ->select('attendences.*','employees.name','employees.picture')
      ->get();
        return view('attendence.edit_attendence',compact('data','date'));
    }
    public function Update(Request $request){
        foreach ($request->id as $id) {
            $data = [
                "status"=>$request->attendence[$id],
                "date"=>$request->date,
                "year"=>$request->year,
                "month"=>$request->month,

                ];
            $atten = Attendence::where(['date'=>$request->date,'id'=>$id])->first();
            $atten->update($data);
             return Redirect()->back();
            
        }
  
    }
    public function View($edit_date){
         $date = DB::table('attendences')->where('edit_date',$edit_date)->first();
      $data = DB::table('attendences')->where('edit_date', $edit_date)
       ->join('employees','attendences.emp_id','employees.id')
      ->select('attendences.*','employees.name','employees.picture')
      ->get();
        return view('attendence.view_attendence',compact('data','date'));
    }

     
}
