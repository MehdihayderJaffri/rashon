

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>Detailed View | IRMS</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/000000/trust.png" type="image/gif" sizes="16x16">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/000000/trust.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/logo.jpg">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      
    </style>
</head>

<body>

    <div class="container-fluid navbar pt-0 pb-0 navbar-dark navbar-expand-md bg-dark">
        <div class="container">
        <a href="#" class="navbar-brand"><img src="https://img.icons8.com/plasticine/100/000000/trust.png" class="img-responsive" width="10%"> Ideal Ration Management System</a>
        <ul class="navbar-nav ">
            <li class="nav-item active"><a href="../public/person" class="nav-link">Families</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Survey</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Generation</a></li>
        </ul>
        </div>
    </div>
    <!---Nav End---> 


   




<!------INSERT Modal Start---->
<div class="container mt-4">
  

  <!-- The Modal -->
  
        <!------Form Start------>
         @foreach ($persons as $p)

         
        <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Modal Header -->
        
          <h4><b>Update PR Form</b></h4>
        
        
        <!-- Modal body -->
<!--         <div class="modal-body">
        -->
                <div class="row">
                    <div class="col-lg-6">
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control" value="{{$p->name}}" name="name">
                        </div>

                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Status</span>
                            </div>
                            <select class="custom-select" name="status">
                                <option selected="selected" value="{{$p->status}}">{{$p->status}}</option>
                                <?php

                    $rec_stat = $p->status;


                    if ($rec_stat == 'Married') {

                     ?>

                      <option value="{{'Single'}}">Single</option>
                      <option value="{{'Widow'}}">Widow</option> 

                    <?php

                    }

                    elseif ($rec_stat == 'Single') {

                     ?>

                      <option value="{{'Married'}}">Married</option>
                      <option value="{{'Widow'}}">Widow</option>
                    <?php

                    }

                    elseif ($rec_stat == 'Widow') {

                     ?>

                      <option value="{{'Married'}}">Married</option>
                      <option value="{{'Single'}}">Single</option>
                    <?php

                    }

                    else{

                        $rec_stat = $rec_stat;

                    }

                     ?>
                               <!--  <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Widow">Widow</option> -->

                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">No. of Persons</span>
                            </div>
                            <input type="text" class="form-control" name="noofperson" value="{{$p->no_of_person}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Package</span>
                            </div>
                            <select class="form-control" name="package">
                               <option selected="selected" value="{{$p->package_id}}">{{$p->package_id}}</option>

                                <?php

                    $pkg_id = $p->package_id;


                    if ($pkg_id == 1) {

                     ?>

                      <option value="2">Package 2 (2832)</option>
                      <option value="3">Package 3 (3500)</option>
                      <option value="4">Package 4 (4650)</option>
                      <option value="5">Package 5 (5000)</option> 

                    <?php

                    }

                    elseif ($pkg_id == 2) {

                     ?>

                      <option value="1">Package 1 (1637)</option>
                      <option value="3">Package 3 (3500)</option>
                      <option value="4">Package 4 (4650)</option>
                      <option value="5">Package 5 (5000)</option>
                    <?php

                    }

                    elseif ($pkg_id == 3) {

                     ?>

                      <option value="1">Package 1 (1637)</option>
                      <option value="2">Package 2 (2832)</option>
                      <option value="4">Package 4 (4650)</option>
                      <option value="5">Package 5 (5000)</option>
                    <?php

                    }

                    elseif ($pkg_id == 4){
                        ?>
                        <option value="1">Package 1 (1637)</option>
                        <option value="2">Package 2 (2832)</option>
                        <option value="3">Package 3 (3500)</option>
                        <option value="5">Package 5 (5000)</option>
                    <?php
                    }

                    elseif ($pkg_id == 5){
                    ?>
                        <option value="1">Package 1 (1637)</option>
                        <option value="2">Package 2 (2832)</option>
                        <option value="3">Package 3 (3500)</option>
                        <option value="4">Package 4 (4650)</option>
                    
                    <?php
                    }
                    

                    else{

                        $pkg_id = $pkg_id;

                    }

                     ?>

                               <!--  <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option> -->
                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Address</span>
                            </div>
                            <input type="text" class="form-control" name="address" value="{{$p->address}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Start Date</span>
                            </div>
                            <?php

                                    $st_date = $p->start_date;
                                    $st1 = new DateTime($st_date);
                                    $st2 = $st1->format('d-M-Y h:i A');

                             ?>
                            <input class="form-control" name="startdate" type="datetime" value="{{$st2}}" id="example-datetime-local-input">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Re-Survey Date</span>
                            </div>
                             <?php

                                    $sr_date = $p->survey_date;
                                    $sr1 = new DateTime($sr_date);
                                    $sr2 = $sr1->format('d m Y');

                             ?>
                            <input class="form-control" name="surveydate" type="date" value="{{$sr_date}}" id="example-datetime-local-input">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Time Period</span>
                            </div>
                            <input type="text" class="form-control" name="timeperiod" value="{{$p->time_period}}">
                        </div>
                        <!------------------>
                    </div>

                    <div class="col-lg-6">
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">F.H Name</span>
                            </div>
                            <input type="text" class="form-control" name="fhname" value="{{$p->fh_name}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Factor</span>
                            </div>
                            <input type="text" class="form-control" name="factor" value="{{$p->factor}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Son Age</span>
                            </div>
                            <input type="text" class="form-control" name="sonage" value="{{$p->son_age}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Area</span>
                            </div>
                            <select class="form-control" name="area">

                        
                                 <?php

                    $are_id = $p->area_id;


                    if ($are_id == 2) {

                     ?>
                      <option selected="selected" value="2">Korangi</option>
                      <option value="1">Orangi</option>
                

                    <?php

                    }

                    elseif ($are_id == 1) {

                     ?>
                     <option selected="selected" value="1">Orangi</option>
                     <option value="2">Korangi</option>
                  
                   
                    <?php

                    }

                    else{

                        $are_id = $are_id;

                    }

                     ?>

                               <!--  <option value="1">Korangi</option>
                                <option value="2">Orangi</option> -->

                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">N.I.C #</span>
                            </div>
                            <input type="text" class="form-control" name="nicno" value="{{$p->nic_no}}">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Ext. Date</span>
                            </div>
                            <?php

                                    $ex_date = $p->extension_date;
                                    $ex1 = new Datetime($ex_date);
                                    $ex2 = $ex1->format('d M Y');

                             ?>
                            <input class="form-control" name="extdate" value="" type="date" value="{{$ex_date}}"><!-- id="example-datetime-local-input" -->
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Survey date 1</span>
                            </div>
                            <?php

                                    // $rsvy_date = $UpdatePerson->re_survey_date;
                                    // $rsvy1 = new datetime($rsvy_date);
                                    // $rsvy2 = $rsvy1->format('d-M-Y')
                                    $rs_date = $p->re_survey_date;

                                    if ($rs_date != null || $rs_date != "") {

                                         $rs1 = new Datetime($rs_date);
                                         $rs2 = $rs1->format('d M Y');

                                    }

                                    else{

                                        $rs_date = $rs_date;
                                        $rs2 = $rs_date;

                                    }
                             ?>
                            <input class="form-control" name="resurveydate" type="date" value="{{$p->re_survey_date}}"><!-- id="example-datetime-local-input" -->
                        </div>

                           <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Attachments</span>
                            </div>
                            &nbsp;<a href="{{url('persons-attachments/'.$p->has_file)}}" target="_blank"><img src="{{url('persons-attachments/'.$p->has_file)}}" alt="{{$p->has_file}}" width="50px" height="auto"></a>

                            <br/>

                            &nbsp;<a href="{{url('persons-attachments/'.$p->has_file2)}}" target="_blank"><img src="{{url('persons-attachments/'.$p->has_file2)}}" alt="{{$p->has_file2}}" width="50px" height="auto"></a>
                        </div>
                    </div>

                </div>
                <button type="button" class="btn btn-secondary float-right"><a style="text-decoration: none; color: white;" href="{{ url()->previous() }}">Cancel</a></button>
        </div>
        
        <!-- Modal footer -->
       <!--  <div class="modal-footer"> -->
            <!-- <input type="submit" value="Update" class="btn btn-success"> -->
            <!-- <button type="button" class="btn btn-secondary float-right"><a style="text-decoration: none; color: white;" href="{{ url()->previous() }}">Cancel</a></button> -->
        <!-- </div> -->
        
        </form>
         
        @endforeach
        <!------Form End-------->

      </div>
    </div>
  </div>
  <script>
$(document).ready(function(){
  $("#myUpdateBtn").click(function(){
    $("#myUpdateModal").modal();
  });
});
</script>
  
</div>
<!-------Modal End----->
<!--------Update Modal End--------->
<!--<script>
// show/hide password script
function myFunction() {
  var x = document.getElementById("p1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
$("#ch").click(function(){
    $(this).toggleClass("fa-eye fa-eye-slash");
});
</script>-->
</body>

</html>


