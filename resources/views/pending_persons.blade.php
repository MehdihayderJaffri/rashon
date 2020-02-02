

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>Pending Persons | IRMS</title>
    <!--== META TAGS ==-->
    <link rel="icon" href="https://img.icons8.com/plasticine/100/000000/trust.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/logo.jpg">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!------------------------------>
    <!-- <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/buttons.dataTables.min.css"> -->      
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
       body{
        font-family: 'Nunito', sans-serif;
      }

      table thead tr {
        font-size: 13px;
      }

      table tbody tr{
        font-size: 12px;
      }

      table{
        border-radius: 10px;
      }
      .btn-primary{
        border-radius: 0px;
      }


      .btn-primary:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        color:#333;
      }

      .btn-success{
        border-radius: 0px;
      }

      .btn-success:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
      }

      /*.active{
        border-bottom-color: snow;
        border-bottom-style: dotted;

      }*/

      .bg-navbar{
        background-color: #003b5c;
      }

      .far{
        color: #003b5c;
      }

      #searchbox{
        border-radius: 0px;
      }

      #toplist li{
        display: inline;

      }

      .btn-default{
        background-color:#f5f5f5;
        color:#333;
      }

      .btn-default:hover{
        background-color: #003b5c;
        color: snow;
      }

      .btn-myblu{
        background-color: #003b5c;
        color: snow;
        border-radius: 0px;

      }
      .btn-myblu:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        color: snow;
        border-radius: 0px;
      }

      .btn-excel:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
      }
      .btn-csv:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
      }
      .btn-pdf:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
      }
      .btn-copy:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
      }
      .active{
        font-weight: bold;
        background-color: #fafcff;
        color: #333;
      }

     


    </style>
</head>

<body>

    <nav class="navbar p-0 navbar-expand-md navbar-light shadow-lg" style="background-color:#003b5c;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/dashboard') }}">
                    <!-- {{ config('app.name', 'Laravel') }} --><img src="https://img.icons8.com/plasticine/100/000000/trust.png" class="img-responsive" width="15%">
                    Ideal Ration Management System
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item "><a href="/rationapp/public/dashboard" class="nav-link text-white">Dashboard</a></li>

                      <li class="nav-item dropdown"><a href="#" class="text-white nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Families</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/person">Family List</a>
                              <a class="dropdown-item" href="../public/experson">Expired Family</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="active nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown">Requisit Form</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/requisition_form">Approval</a>
                              <a class="dropdown-item" href="../public/rejected_persons">Rejected</a>
                              <a class="dropdown-item" href="../public/pending_persons">Pending</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="nav-link text-white dropdown-toggle" id="navbardrop" data-toggle="dropdown">Survey</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/duesurvey">Due Survey</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="nav-link text-white dropdown-toggle" id="navbardrop" data-toggle="dropdown">Generation</a>
                          <div class="dropdown-menu">
                                <a class="dropdown-item" href="../public/surveypayroll"><i class='far fa-calendar-alt'> </i> Generate Survey List</a>
                                <a class="dropdown-item" href="../public/rationpayroll"><i class='far fa-calendar-times'> </i> Generate Ration List</a>
                                <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                     
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <!---Nav End---> 




    <div class="container-fluid mt-1 p-1">
        <!-- Button to Open the Modal -->

        <div class="container bg-light pb-5 pt-3 border">
           <ul id="toplist" class="float-right">        
              <!-- <li><button type="button" id="myBtn" title="Add Person" class="btn btn-sm btn-myblu p-1" data-toggle="modal" data-target="#myModal"><img src="https://img.icons8.com/color/48/000000/add-user-group-woman-man.png" width="22%"> Add Person</button>
              </li> -->
           </ul>  
        </div>
              <!-- <li> -->
                <!-- <form action="" method="get" enctype="multipart/form-data"> -->
                  <!-- <a href="{{ route('export') }}" class="btn btn-sm btn-success border-success p-1" title="Download Records"><img src="https://img.icons8.com/color/48/000000/ms-excel.png" width="25%">Export</a> -->
                <!-- </form> -->
              <!-- </li> -->

<br/>
        <!--table Ini--->
         <table id="persontable" class="table table-hover shadow-sm table-striped border">
         <thead class="bg-light text-dark">   
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>F/H Name</th>
            <th>Status</th>
            <th>Factor</th>
            <th>No. of Person</th>
            <th>Son Age</th>
            <th>N.I.C #</th>
            <th>Amount</th>
            <th>Area</th>
            <th>Start Date</th>
            <th>Re-Survey Date</th>
            <th>Re-Survey 1</th>
            <th>Extension Date</th>
            <!-- <th>Stop Date</th> -->
            <!-- <th>Time Period</th> -->
            <th>Comment</th>
            <th>Action</th>
         </tr>
         </thead>

         <tbody>   
         <tr>
            @foreach ($persons as $person)
            
                <?php

                    $sdate = $person->start_date; 
                    $s1 = new DateTime($sdate);
                    $da1 = $s1->format('d M Y');                    

                ?>

                <?php

                    $srdate = $person->survey_date; 
                    $sr1 = new DateTime($srdate);
                    $da2 = $sr1->format('d M Y');                    

                ?>

                <!-- <php

                    $rsdate = $person->re_survey_date; 
                    $rs1 = new DateTime($rsdate);
                    $da3 = $rs1->format('d M Y');                    

                ?>
 -->
                <?php

                    $ext_date = $person->extension_date;
                    $ext1 = new DateTime($ext_date);
                    $ext2 = $ext1->format('d M Y');                    

                ?>

             <td>{{ $person->id }}</td>
             <td>{{ $person->name }}</td>
             <td>{{ $person->fh_name }}</td>
             <td>{{ $person->status }}</td>
             <td>{{ $person->factor }}</td>
             <td>{{ $person->no_of_person }}</td>
             <td>{{ $person->son_age }}</td>
             <td>{{ $person->nic_no }}</td>
             <td>Rs.{{ $person->amount }}/=</td>
             <td>{{ $person->area_name }}</td>
             <td>{{ $da1 }}</td>
             <td>{{ $da2 }}</td>
             <td>{{ $person->re_survey_date }}</td>
             <td>{{ $person->extension_date }}</td>
             <!-- <td>{{ $person->stop_date }}</td> -->
             <td>{{ $person->note_to_know }}</td>

             <td>
                <div class="dropdown dropright">
                    <button type="button" class="btn btn-sm pt-0 pb-0 pl-1 pr-1 border-dark btn-default dropdown-toggle" data-toggle="dropdown" style="font-size:10px;">
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/rationapp/public/approve/{{$person->id}}"><img src="https://img.icons8.com/color/48/000000/cancel-2--v2.png" width="20%"> Approved</a>
                      <!-- <i class='far fa-times-circle'> </i> -->
                       <a class="dropdown-item" href="/rationapp/public/reject/{{$person->id}}"> <!-- <i class='far fa-edit'> </i> --><img src="https://img.icons8.com/color/48/000000/edit.png" width="20%"> Reject</a>
                       <!-- <a class="dropdown-item" href="/rationapp/public/commit/{{$person->id}}"> <i class='far fa-edit'> </i><img src="https://img.icons8.com/color/48/000000/speech-bubble.png" width="20%"> Pending</a> -->
                      
                      <!------>
                         

                      
                      <!------->
                    </div>
                    
                </div>

             </td>

         </tr>
        @endforeach
         </tbody>

      </table>
      <!--table End--->
    </div>
    










<!------INSERT Modal Start---->
<div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!------Form Start------>
        <form action="/rationapp/public/inserting" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#b3d7ff;">
          <h4 class="modal-title"><b>PR Form</b></h4>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Status</span>
                            </div>
                            <select class="custom-select" name="status">
                                <option>Choose Status</option>
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">No. of Persons</span>
                            </div>
                            <input type="text" class="form-control" name="noofperson">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Package</span>
                            </div>
                            <select class="form-control" name="package">
                                <option>Choose Package</option>
                                <option value="1">Package 1 (1637)</option>
                                <option value="2">Package 2 (2832)</option>
                                <option value="3">Package 3 (3500)</option>
                                <option value="4">Package 4 (4650)</option>
                                <option value="5">Package 5 (5000)</option>
                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Address</span>
                            </div>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Start Date</span>
                            </div>
                            <input class="form-control" name="startdate" type="date" value="" ><!-- id="example-datetime-local-input" -->
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Re-Survey Date</span>
                            </div>
                            <input class="form-control" name="surveydate" type="date" value=""><!-- id="example-datetime-local-input" -->
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Time Period</span>
                            </div>
                            <input type="text" class="form-control" name="timeperiod">
                        </div>
                        <!------------------>
                    </div>

                    <div class="col-lg-6">
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">F.H Name</span>
                            </div>
                            <input type="text" class="form-control" name="fhname">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Factor</span>
                            </div>
                            <input type="text" class="form-control" name="factor">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Son Age</span>
                            </div>
                            <input type="text" class="form-control" name="sonage">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Area</span>
                            </div>
                            <select class="form-control" name="area">
                                <option>Choose Area</option>
                                <option value="2">Korangi</option>
                                <option value="1">Orangi</option>
                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">N.I.C #</span>
                            </div>
                            <input type="text" class="form-control" name="nicno">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Ext. Date</span>
                            </div>
                            <input class="form-control" name="extdate" type="date" value=""><!-- id="example-datetime-local-input" -->
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Re-Survey 1</span>
                            </div>
                            <input class="form-control" name="resurveydate" type="date" value=""><!-- id="example-datetime-local-input" -->
                        </div>
                    </div>

                </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" value="Save" class="btn btn-success">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
        </form>
        <!------Form End-------->

      </div>
    </div>
  </div>
  
</div>
<!-------Modal End----->
<!--Scripting--->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>

  <script type="text/javascript">
    
    $(document).ready(function() {
        $('#persontable').DataTable({
          
          dom: 'Bfrtip',

          buttons:{

            buttons:[

            {"extend": 'excel', "text":'<img src="https://img.icons8.com/color/48/000000/ms-excel.png" width="30%"> Excel',"className": 'btn btn-sm p-0 btn-excel'},

            {"extend": 'csv', "text":'<img src="https://img.icons8.com/color/48/000000/export-csv.png" width="30%"> CSV',"className": 'btn btn-sm p-0 btn-csv'},

            {"extend": 'copy', "text":'<img src="https://img.icons8.com/color/48/000000/copy.png" width="30%"> Copy',"className": 'btn btn-sm p-0 btn-copy'},

            {"extend": 'pdf', "text":'<img src="https://img.icons8.com/color/48/000000/export-pdf.png" width="30%"> PDF',"className": 'btn btn-sm p-0 btn-pdf'}
            ]
          } 

          // ['excel', 'copy', 'pdf']

          });        
      } );
  </script>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

<script type="text/javascript">
  $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
</script>   




<!---------Update Modal Start------>
<!------INSERT Modal Start---->

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


