<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DateTime;

class PersonUpdateController extends Controller
{
    public function UpdateRec(){


    	// $persons = DB::select('select * from people');

    	// $persons = DB::table('people')
		   //          ->join('package', 'people.package_id', '=', 'package.id')
		   //          ->join('area', 'people.area_id', '=', 'area.id')
		   //          ->select('people.*', 'package.package_name', 'area.area_name')
		   //          ->whereNull('stop_date')
		   //          ->get();

    	// return view('person', ['persons' => $persons]);

    }


    // public function insert(Request $request){

    	

    // 	$n = $request->input('name');
    // 	$stat = $request->input('status');
    // 	$nop = $request->input('noofperson');
    // 	$pkg = $request->input('package');
    // 	$add = $request->input('address');
    // 	$sd = $request->input('startdate');
    // 	$syd = $request->input('surveydate');
    // 	$tp = $request->input('timeperiod');
    // 	$fhn = $request->input('fhname');
    // 	$fact = $request->input('factor');
    // 	$sage = $request->input('sonage');
    // 	$are = $request->input('area');
    // 	$nic = $request->input('nicno');
    // 	$ed = $request->input('extdate');
    // 	$rsd = $request->input('resurveydate');
    // 	$timestamps = new \DateTime();
    	

    // 	$query = DB::table('people')->insert(

    // 		[
    // 			'name' => $n,
    // 			'fh_name' => $fhn,
    // 			'status' => $stat,
    // 			'factor' => $fact,	
    // 			'no_of_person' => $nop,
    // 			'son_age' => $sage,
    // 			'package_id' => $pkg,
    // 			'area_id' => $are,
    // 			'address' => $add,
    // 			'nic_no' => $nic,
    // 			'start_date' => $sd,
    // 			'survey_date' => $syd,
    // 			'extension_date' => $ed,
    // 			'time_period' => $tp,
    // 			'created_date' => $timestamps
    // 		]);

    // 	return redirect('/person');
    // }

        
    //     public function deleteRec(Request $request,$id){

    // 	$del = DB::table('people')->where('id', '=', [$id])->delete();

    // 	return redirect('/person');
    // }
    
}
