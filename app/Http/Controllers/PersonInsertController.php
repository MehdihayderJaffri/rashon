<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonInsertController extends Controller
{
    public function insertform(){
    	return view ('person');
    }

    public function insert(){
    	$n = $request->input('name');
    	$stat = $request->input('status');
    	$nop = $request->input('noofperson');
    	$pkg = $request->input('package');
    	$add = $request->input('address');
    	$sd = $request->input('startdate');
    	$syd = $request->input('surveydate');
    	$tp = $request->input('timeperiod');
    	$fhn = $request->input('fhname');
    	$fact = $request->input('factor');
    	$sage = $request->input('sonage');
    	$are = $request->input('area');
    	$nic = $request->input('nicno');
    	$ed = $request->input('extdate');
    	$rsd = $request->input('resurveydate');
    	

    	$query = DB::table('people')->insert(

    		[
    			'name' => $n,
    			'fh_name' => $fhn,
    			'status' => $stat,
    			'factor' => $fact,	
    			'no_of_person' => $nop,
    			'son_age' => $sage,
    			'package_id' => $pkg,
    			'area_id' => $are,
    			'address' => $add,
    			'nic_no' => $nic,
    			'start_date' => $sd,
    			'survey_date' => $syd,
    			're_survey_date' => $rsd,
    			'extension_date' => $ed,
    			'time_period' => $tp
    			
    		]);

    	return view ('person');
    }
}
