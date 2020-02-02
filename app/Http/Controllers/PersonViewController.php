<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
// use App\Http\Controllers\Controller;
use App\Exports\UsersExport;
use Date;
use Maatwebsite\Excel\Facades\Excel;


class PersonViewController extends Controller
{

    // public function DashboardFunc(){

    //     $person = DB::table('people')
    //                 ->where('is_approved', '=', 'Approved')
    //                 ->count()
    //                 ->get();
                    
    //     return view('dashbard', ['person' => $person]);
    // }


    public function viewpeople(){


    	// $persons = DB::select('select * from people');

    	$persons = DB::table('people')
		            ->join('package', 'people.package_id', '=', 'package.id')
		            ->join('area', 'people.area_id', '=', 'area.id')
                    // ->join('comments', 'people.comment_id', '=', 'comments.id')
		            ->select('people.*', 'package.amount', 'area.area_name')
                    ->where('is_approved', '=', 'Approved')
		            ->whereNull('stop_date')
		            ->get();

    	return view('person', ['persons' => $persons]);

    }

    public function RequisitForm(){


        // $persons = DB::select('select * from people');

        $persons = DB::table('people')
                    ->join('package', 'people.package_id', '=', 'package.id')
                    ->join('area', 'people.area_id', '=', 'area.id')
                    // ->join('comments', 'people.comment_id', '=', 'comments.id')
                    ->select('people.*', 'package.amount', 'area.area_name')
                    ->where('is_approved', '=', null)
                    ->whereNull('stop_date')
                    ->get();

        return view('requisition_form', ['persons' => $persons]);

    }

    public function RejectedPersons(){


        // $persons = DB::select('select * from people');

        $persons = DB::table('people')
                    ->join('package', 'people.package_id', '=', 'package.id')
                    ->join('area', 'people.area_id', '=', 'area.id')
                    // ->join('comments', 'people.comment_id', '=', 'comments.id')
                    ->select('people.*', 'package.amount', 'area.area_name')
                    ->where('is_approved', '=', 'Rejected')
                    ->whereNull('stop_date')
                    ->get();

        return view('rejected_persons', ['persons' => $persons]);

    }

    public function ViewInDetail(request $request,$id){
        $persons = DB::table('people')->where('id', '=', [$id])->get();

        return view('view_form_in_detail', ['persons' => $persons]);
 
    }

    public function PendingPersons(){


        // $persons = DB::select('select * from people');

        $persons = DB::table('people')
                    ->join('package', 'people.package_id', '=', 'package.id')
                    ->join('area', 'people.area_id', '=', 'area.id')
                    // ->join('comments', 'people.comment_id', '=', 'comments.id')
                    ->select('people.*', 'package.amount', 'area.area_name')
                    ->where('is_approved', '=', 'Pending')
                    ->whereNull('stop_date')
                    ->get();

        return view('pending_persons', ['persons' => $persons]);

    }


    public function Approved(request $request,$id){
        $is_approved = 'Approved';
        $query1 = DB::table('people')->where('id','=', [$id])->update(array('is_approved' => $is_approved));

            return redirect('/requisition_form'); 
           
    }

    public function Pending(request $request,$id){
        $is_approved = 'Pending';
        $query1 = DB::table('people')->where('id','=', [$id])->update(array('is_approved' => $is_approved));

            return redirect('/requisition_form'); 
           
    }


    public function Rejected(request $request,$id){
        $is_approved = 'Rejected';
        $query1 = DB::table('people')->where('id','=', [$id])->update(array('is_approved' => $is_approved));

            return redirect('/requisition_form');
           
    }



    public function insert(Request $request){

    	

    	$n = $request->input('name');
    	$stat = $request->input('status');
    	$nop = $request->input('noofperson');
    	$pkg = $request->input('package');
    	$add = $request->input('address');
        $hos = $request->input('houses');
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
    	$timestamps = new \DateTime();
        $isactive = 1;
        $file2 = $request->file('files2');
    	
        if($file = $request->file('files')){
            $name = $file->getClientOriginalName();
            $name2 = $file2->getClientOriginalName();


            $file->move('persons-attachments', $name);
            $file2->move('persons-attachments', $name2);

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
                'house' => $hos,
    			'nic_no' => $nic,
    			'start_date' => $sd,
    			'survey_date' => $syd,
    			'extension_date' => $ed,
                're_survey_date' => $rsd,
                'has_file' => $name,
                'has_file2' => $name2,
    			'time_period' => $tp,
    			'created_date' => $timestamps,
                'is_active' => $isactive
    		]);
        // return redirect('/person');
    // }
}


    	return redirect('/person');
    }

        
        public function deleteRec(Request $request,$id){

    	$del = DB::table('people')->where('id', '=', [$id])->delete();

    	return redirect('/person');
    }


     public function updateRec(Request $request,$id){

        $persons = DB::table('people')->where('id', '=', [$id])->get();

        return view('update', ['persons' => $persons]);
 }

    
    public function update_recs(Request $request,$id){
        // $persons = DB::table('people')->where('id', '=', [$id])->get();

        $timestamps = new \DateTime();
        $n = $request->input('name');
         $stat = $request->input('status');
        $nop = $request->input('noofperson');
        $pkg = $request->input('package');
        $add = $request->input('address');
        $hos = $request->input('houses');
        // $sd = $request->input('startdate');
         $syd = $request->input('surveydate');
        $tp = $request->input('timeperiod');
        $fhn = $request->input('fhname');
        $fact = $request->input('factor');
        $sage = $request->input('sonage');
        $are = $request->input('area');
        $nic = $request->input('nicno');
        $rsvy = $request->input('resurveydate');
        $ed = $request->input('extdate');
       

        if ($rsvy != null || $rsvy != '') {

       $persons = DB::table('people')->where('id','=', [$id])->update(array(

              
                'name' => $n,
                'fh_name' => $fhn,
                'status' => $stat,
                'factor' => $fact,  
                'no_of_person' => $nop,
                'son_age' => $sage,
                'package_id' => $pkg,
                'area_id' => $are,
                'address' => $add,
                'house' => $hos,
                'nic_no' => $nic,
                // 'start_date' => $sd,
                'survey_date' => $syd,
                're_survey_date' => $rsvy,
                'extension_date' => $ed,
                'time_period' => $tp,
                'updated_date' => $timestamps
                

              ));
         }

         else {

        $persons = DB::table('people')->where('id','=', [$id])->update(array(

            'name' => $n,
                'fh_name' => $fhn,
                'status' => $stat,
                'factor' => $fact,  
                'no_of_person' => $nop,
                'son_age' => $sage,
                'package_id' => $pkg,
                'area_id' => $are,
                'address' => $add,
                'house' => $hos,
                'nic_no' => $nic,
                // 'start_date' => $sd,
                'survey_date' => $syd,
                //'re_survey_date' => $rsvy,
                'extension_date' => $ed,
                'time_period' => $tp,
                'updated_date' => $timestamps

            ));

         }




        return redirect('/person');

    }

    public function StopRec(request $request,$id){

        $persons = DB::table('people')->where('id', '=', [$id])->get();

        return view('discardcomment', ['persons' => $persons]);

        
        // $stopdate = new \DateTime();
        // $inactive = 0;
        // $query = DB::table('people')->where('id', '=', [$id])->update(array('stop_date' => $stopdate, 'is_active' => $inactive ));



        // return redirect('/person');


     }

     public function stoprecords(request $request, $id){

        $stpcommit = $request->input('discardcomment');
        $stopdate = new \DateTime();
        $inactive = 0;
        $query1 = DB::table('people')->where('id','=', [$id])->update(array('stop_date' => $stopdate, 'is_active' => $inactive, 'note_to_know' => $stpcommit ));

            return redirect('/person'); 
           
        }
        




      public function expeople(){


        // $persons = DB::select('select * from people');

        $expersons = DB::table('people')
                    ->join('package', 'people.package_id', '=', 'package.id')
                    ->join('area', 'people.area_id', '=', 'area.id')
                    ->select('people.*', 'package.amount', 'area.area_name')
                    ->whereNotNull('stop_date')
                    // ->whereNotNull('note_to_know')
                    ->get();

        return view('experson', ['expersons' => $expersons]);

    }



    public function showcomment(request $request,$id){

        $persons = DB::table('people')->where('id', '=', [$id])->get();

        return view('addcomment', ['persons' => $persons]);
    }






     public function AddComment(request $request,$id){

        
        $newcomment = $request->input('Comment');

        $query1 = DB::table('people')->where('id','=', [$id])->update(array('note_to_know' => $newcomment));

        return redirect('/person');

     }




     // public function StopRecs(request $request,$id){


     //    $pid = $id;
     //    $comment = $request->input('comment');
     //    $created_time = new \DateTime();
     //    $query1 = DB::table('comments')->insert(

     //        [
     //        'pid' => $pid,
     //        'comment' => $comment,
     //        'created_date' => $created_time
     //        ]);

     //    return redirect('/person', ['query1' => $query1]);


     // }

     
     public function UpSurvey(){

        $TodayDate = new \DateTime();
        $UpComeSurvey = DB::table('people')
                        ->join('package', 'people.package_id', '=', 'package.id')
                        ->join('area', 'people.area_id', '=', 'area.id')
                        ->select('people.*', 'package.amount', 'area.area_name')
                        ->whereNull('stop_date')
                        ->where('survey_date', '>=', $TodayDate)
                        ->where('is_approved', '=', 'Approved')
                        ->get();

        return view('upcomingsurvey', ['UpComeSurvey' => $UpComeSurvey]);
     }



     public function DueSurvey(){

        $TodayDate = new \DateTime();
        $duesurvey = DB::table('people')
                        ->join('package', 'people.package_id', '=', 'package.id')
                        ->join('area', 'people.area_id', '=', 'area.id')
                        ->select('people.*', 'package.amount', 'area.area_name')
                        ->whereNull('stop_date')
                        ->where('survey_date', '<', $TodayDate)
                        ->where('is_approved', '=', 'Approved')
                        ->get();

        return view('duesurvey', ['duesurvey' => $duesurvey]);
     }

     public function EditDS(Request $request,$id){

        $edit_due_survey = DB::table('people')->where('id', '=', [$id])->get();

        return view('edit-due_survey', ['edit_due_survey' => $edit_due_survey]);
    }



    public function UpdateDS(Request $request,$id){
        // $persons = DB::table('people')->where('id', '=', [$id])->get();

        $timestamps = new \DateTime();
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
        $rsvy = $request->input('resurveydate');
        $ed = $request->input('extdate');
       

        

       $persons = DB::table('people')->where('id','=', [$id])->update(array(

              
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
                're_survey_date' => $rsvy,
                'extension_date' => $ed,
                'time_period' => $tp,
                'updated_date' => $timestamps
                
              ));

        return redirect('/duesurvey');

    }

     // public function Search(Request $request){

     //    $input = isset($_GET['q']) ?? null;
     //    $persons = DB::table('people')
     //                ->join('package', 'people.package_id', '=', 'package.id')
     //                ->join('area', 'people.area_id', '=', 'area.id')
     //                ->select('people.*', 'package.amount', 'area.area_name')
     //                ->whereNull('stop_date');

     //    // $persons = DB::table('people')->where('persons.name', 'LIKE', '%'. $input .'%');

     //    if($input != null){

     //        $persons->where('name','like','%'.$input.'%');

     //        $persons = $persons->get();
     //    }

        
     //   return view('person', ['persons' => $persons]);     

                 
     // }

     // public function export(){

     //    return Excel::download(new UsersExport, 'people.xlsx');
     // }


     public function surveypayroll(){
// $MonthlyDate = \Carbon\Carbon::today()->subDays(90);
        // $TodayDate = new \DateTime();
        // $final = date("d m y", strtotime('+2' , '2'));
        // $nextMonth= date('d m Y',strtotime($final));
        // $now=date('d m y');
        // $sql="select * from table where date>='".$now.' and date<=$nextMonth";

        
        $surveypayroll = DB::table('people')
                         ->join('package', 'people.package_id', '=', 'package.id')
                         ->join('area', 'people.area_id', '=', 'area.id')
                         ->select('people.*', 'package.amount', 'area.area_name')
                         ->where('is_approved', '=', 'Approved')
                        // ->where('survey_date', '<', $nextMonth)
                         //->where('survey_date','<',DB::raw('DATE_ADD(DATE(NOW()), INTERVAL 2 MONTH)'))
                         ->whereBetween('survey_date', [DATE(NOW()), DB::raw('DATE_ADD(DATE(NOW()), INTERVAL 2 MONTH)')])
                         ->get();

        return view('surveypayroll', ['surveypayroll' => $surveypayroll]);

     }


     /////////


     public function rationpayroll(){

        //$MonthlyDate = \Carbon\Carbon::today()->subDays(90);
        $TodayDate = new \DateTime();
        $rationpayroll = DB::table('people')
                         ->join('package', 'people.package_id', '=', 'package.id')
                         ->join('area', 'people.area_id', '=', 'area.id')
                         ->select('people.*', 'package.amount', 'area.area_name')
                         ->whereNull('stop_date')
                         ->where('re_survey_date', '>', $TodayDate)
                         ->where('is_approved', '=', 'Approved')
                         ->get();

        return view('rationpayroll', ['rationpayroll' => $rationpayroll]);

     }
    
}
