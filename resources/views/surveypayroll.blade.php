

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>Survey List | IRMS</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/000000/trust.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/logo.jpg">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       <!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/> -->
 <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">       
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
       <!--  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

       <!--  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  -->      
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 -->
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
      }

      .btn-success{
        border-radius: 0px;
      }

      .btn-success:hover{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
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

      .active{
        font-weight: bold;
        background-color: #fafcff;
        color: #333;
      }

    </style>
</head>

<body>

    <nav class="navbar p-0 navbar-expand-md navbar-light" style="background-color:#003b5c;">
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

                      <li class="nav-item dropdown"><a href="#" class="nav-link text-white dropdown-toggle" id="navbardrop" data-toggle="dropdown">Families</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/person">Family List</a>
                              <a class="dropdown-item" href="../public/experson">Expired Family</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="nav-link text-white dropdown-toggle" id="navbardrop" data-toggle="dropdown">Requisit Form</a>
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

                      <li class="nav-item dropdown"><a href="#" class="active nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Generation</a>
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

        <!-- <div class="container bg-light p-3 mb-3 border">
           -->
                  
          
          <!-- <ul id="toplist" class="float-right">
            
            <li><button type="button" id="myBtn" title="Add Person" class="btn btn-sm btn-primary p-1" data-toggle="modal" data-target="#myModal"><i class='fas fa-user-plus'> </i> Add Person</button></li>

            <li><button class="btn btn-sm btn-success p-1" title="Download Records"><i class="fa fa-file-excel-o"></i></button></li>

          </ul>
           -->

          <!-----Search Form----->
          <!-- <form action="/genpayroll" method="get" enctype="multipart/form-data" style="width:30%;">
              
              <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Package</span>
                            </div>
                            <select class="form-control" name="gen">
                                <option>Select month</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">September</option>
                                <option value="4">October</option>
                                <option value="5">November</option>
                            </select>
              </div>

          </form> -->
          <!----Search Form End--->

          <div class="container-fluid mt-1 p-1">

                    <table border="0" cellspacing="5" cellpadding="5">
                        <tbody>
                          <!--  <?//php 

                               //  $dt1 = new DateTime();
                                 // $dtt1 = $dt1->format('d-m-Y');

                                 // $dds1 = date('d-m-Y', strtotime('-29 day', strtotime($dtt1)));

                                 // $dtt1a =  date("d/m/Y", strtotime($dtt1));
                                 // $dds1a =  date("d/m/Y", strtotime($dds1));

                            ?> -->
                            <tr>
                                <!-- <td style="width: 90px; color: black; visibility: hidden;">Start Date:</td> -->
                                <td style="width: 220px;"><input name="min1" id="min1" type="text" title="dd/mm/yyyy" style="visibility: hidden;"></td>
                                <!-- <td style="width: 90px; color: black; visibility: hidden;">End Date:</td> -->
                                <td><input name="max1" id="max1" type="text" title="dd/mm/yyyy" style="visibility: hidden;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="font-weight-bold">Survey List <emp class="lead" style="font-size: 14px;"> - Of next 2 months</emp></h3>
                    <br>
                    <table class="table table-hover shadow-sm table-striped border" id="grids1">

                        <thead class="bg-light text-dark">
                            <tr>
                                <!-- <th style="display: none;"></th>
                                <th>Leave Id</th>
                                <th>Name</th>
                                <th>Employee Id</th>
                                <th>Leave Type</th>
                                <th>Form Submitted</th>
                                <th>Leave Form</th> -->

                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Amount</th>
                                  <th>Area</th>
                                  <th>Address</th>
                                  <th>Re-Survey Date</th>
                                  <th>Re-Survey 1</th> 
                            </tr>
                        </thead>

                 <tbody>

                      @foreach($surveypayroll as $spr)
                       
                    <tr>

                    <?php

                    $sdate = $spr->survey_date; 
                    $rr1 = new DateTime($sdate);
                    $da1 = $rr1->format('d M Y');                    

                    ?>

                    <?php

                    $rsdate = $spr->re_survey_date; 
                    $rs2 = new DateTime($rsdate);
                    $da2 = $rs2->format('d M Y');                    

                    ?>
                    
                     <td>{{ $spr->id }}</td>
                     <td>{{ $spr->name }}</td>
                     <td>Rs.{{ $spr->amount }}/=</td>
                     <td>{{ $spr->area_name }}</td>
                     <td>{{ $spr->address }}</td>
                     <td>{{ $da1 }}</td>
                     <td>{{ $da2 }}</td>
                    
                    
                    </tr>

                       @endforeach

                </tbody>
              </table>
           </div>


        </div>

        <!--table Ini--->
        



      <!--table End--->
    </div>
 

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


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

  /* Custom filtering function which will search data in column 5 between two values */

$(document).ready(function(){
        $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min1 = $('#min1').datepicker("getDate");
            var max1 = $('#max1').datepicker("getDate");
            var startDate = new Date(data[5]);   // data [5] is the column no. of table which is a date column here, col count starts from 0.

            if (min1 == null && max1 == null) { return true; }
            if (min1 == null && startDate <= max1) { return true;}
            if(max1 == null && startDate >= min1) {return true;}
            if (startDate <= max1 && startDate >= min1) { return true; }
            return false;
        }
        );

       
            $("#min1").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true, dateFormat:"dd/mm/yy" });
            $("#max1").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true, dateFormat:"dd/mm/yy" });
            var table = $('#grids1').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min1, #max1').change(function () {
                table.draw();
            });
        });

</script>

</html>


