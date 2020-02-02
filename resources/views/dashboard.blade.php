<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
    <style type="text/css">
      .shadow:hover{

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border:1px solid #b9b9b9;
        /*transition-duration: 0.10s;
        transition-delay: 0.15s;*/
      }

      .shad{
        box-shadow: 2px 4px 6px 2px #dedede;
        transition-duration: 0.10s;
        transition-delay: 0.15s;
      }

      body{
        background-color: #fafcff;
      }

      .active{
        font-weight: bold;
        background-color: #fafcff;
        color: #333;
      }
    </style>
  </head>
  <body>
    
    <div id="main" class="p-0 m-0">
      <div id="app">
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
                      <li class="nav-item "><a href="/rationapp/public/dashboard" class="nav-link active">Dashboard</a></li>

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
    </div>

      <!---------New Work Start------>
      <div class="jumbotron pb-0 pt-5 bg-transparent">
        <div class="row">
          <div class="col-md">
            <!---card 1--->
            <div class="card bg-transparent" style="border: none;">
              <div class="card-header font-weight-bold p-0 bg-transparent"><img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" alt="Family">Families</div>
              <div class="card-body">
                <div class="row">


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/person" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #ff0000;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Family</h5>
                        <?php $per_c = DB::table('people')->where('is_approved', '=', 'Approved')->whereNull('stop_date')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$per_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/requisition_form" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #fd7e14;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Requisition Form</h5>
                        <?php $form_c = DB::table('people')->where('is_approved', '=', null)->whereNull('stop_date')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$form_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>

                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/experson" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #ffc107;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Expired Family</h5>
                        <?php $exper_c = DB::table('people')->whereNotNull('stop_date')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$exper_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/pending_persons" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #28a745;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Pending Request</h5>
                        <?php $pending_c = DB::table('people')->where('is_approved', '=', 'Pending')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$pending_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/surveypayroll" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #007bff;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Due-Survey within 2 Months</h5>
                        <?php $surveylist_c = DB::table('people')->where('is_approved', '=', 'Approved')->whereBetween('survey_date', [DATE(NOW()), DB::raw('DATE_ADD(DATE(NOW()), INTERVAL 2 MONTH)')])->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$surveylist_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/rationpayroll" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #6610f2;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Grocery List</h5>
                        <?php $TodayDate = new \DateTime();
                        $ratlist_c = DB::table('people')->whereNull('stop_date')->where('re_survey_date', '>', $TodayDate)->where('is_approved', '=', 'Approved')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$ratlist_c}}</p>
                        <?php $sum_amount = DB::table('people')->join('package', 'people.package_id', '=', 'package.id')->join('area', 'people.area_id', '=', 'area.id')->select('people.*', 'package.amount', 'area.area_name')->whereNull('stop_date')->where('re_survey_date', '>', $TodayDate)->where('is_approved', '=', 'Approved')->sum('amount');?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Distribution: {{$sum_amount}}/=</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="/rationapp/public/duesurvey" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #ee82ee;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Pending Survey</h5>
                        <?php $TodayDate = new \DateTime(); $duesurvey_c = DB::table('people')->whereNull('stop_date')->where('survey_date', '<', $TodayDate)->where('is_approved', '=', 'Approved')->count();?>
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$duesurvey_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="#" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #af5433;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/groups.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Payment Details</h5>
                        <!-- php $TodayDate = new \DateTime(); $duesurvey_c = DB::table('people')->whereNull('stop_date')->where('survey_date', '<', $TodayDate)->where('is_approved', '=', 'Approved')->count(); -->
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: $0.0</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>



                </div>
              </div>
              <!-- <div class="card-footer">Footer</div> -->
            </div>
            <!-----card 1 end--->
          </div>
          <!---->
          <div class="col-md">
            <!---card 1--->
            <div class="card bg-transparent" style="border: none;">
              <div class="card-header font-weight-bold p-0 bg-transparent"><img src="https://img.icons8.com/color/48/000000/student-center.png">Institutions</div>
              <div class="card-body">
                <div class="row">


                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" href="#" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #ff0000;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/student-center.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Payment Details</h5>
                        
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: $0.0</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>

                  <!----------------->

                  <div class="col-md-6 mt-2">
                <!---Family card Start--->
                  <a class="m-0 p-0" data-toggle="modal" data-target="#InstModal" style="text-decoration:none; cursor: pointer; text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #ff0000;">
                      <div class="card-body p-2">
                        <div class="media">
                      <img class="mr-2" src="https://img.icons8.com/color/48/000000/student-center.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-2 mb-0 font-weight-bold text-dark" style="font-size:16px;">Jamia Dar-ul-Uloom Karachi</h5>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>       
                <!---Family card End----->
                  </div>

                <!------------------->

                  <div class="col-md-6 mt-2"> <!-- For next card -->
                <!---Family card Start--->
                  <!-- <a class="m-0 p-0" href="/rationapp/public/person" style="text-decoration:none;">
                  <div class="card shadow" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-left-style: solid; border-left-width: 3px; border-left-color: #fd7e14;">
                      <div class="card-body">
                        <div class="media">
                      <img class="mr-2 border" src="https://img.icons8.com/color/48/000000/family.png" width="25%" alt="Family">
                      <div class="media-body">
                        <h5 class="mt-0 mb-0 font-weight-bold text-dark" style="font-size:16px;">Requisition Form</h5>
                        php $form_c = DB::table('people')->where('is_approved', '=', null)->whereNull('stop_date')->count();
                        <p class="m-0 pl-0 text-muted" style="font-size: 13px;">Total: {{$form_c}}</p>
                      </div>
                    </div>
                      </div>
                    </div>
                    </a>  -->      
                <!---Family card End----->
                  </div>

              </div>
            </div>
             <!--  <div class="card-footer">Footer</div> -->
            </div>
            <!-----card 1 end--->
          </div>
        </div>
      </div>
      <!---------New Work End-------->
      
    <!---Summary Box---->
        <div class="container mt-0 pt-0">
          <label for="Summary" class="font-weight-bold">Distribution Summary</label>
          <div class="row">
            <!---->
            <div class="col-md-12">
              <table class="table border shad">
                  <thead>
                    <tr class="bg-white">
                      <th>
                        Areas
                      </th>
                      <th>
                        Total
                      </th>
                      <th>
                        Delivered
                      </th>
                      <th>
                        Pending
                      </th>
                      <th>
                        Payment
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Korangi
                      </td>
                      <?php $korangi = DB::table('people')->where('is_approved', '=', 'Approved')->where('area_id', '=', 2)->where('stop_date', '=', null)->count();?>
                      <td>
                        {{$korangi}}
                      </td>
                      <td>0/0</td>
                      <td>0/0</td>
                      <?php $sum_K_amount = DB::table('people')->join('package', 'people.package_id', '=', 'package.id')->join('area', 'people.area_id', '=', 'area.id')->select('people.*', 'package.amount', 'area.area_name')->whereNull('stop_date')->where('re_survey_date', '>', $TodayDate)->where('is_approved', '=', 'Approved')->where('area_id', '=', 2)->sum('amount');?>
                      <td>{{$sum_K_amount}}/=</td>
                    </tr>
                      <!---------->
                    <tr>
                      <td>
                        Orangi
                      </td>
                      <?php $orangi = DB::table('people')->where('is_approved', '=', 'Approved')->where('area_id', '=', 1)->where('stop_date', '=', null)->count();?>
                      <td>
                        {{$orangi}}
                      </td>
                      <td>0/0</td>
                      <td>0/0</td>
                      <?php $sum_O_amount = DB::table('people')->join('package', 'people.package_id', '=', 'package.id')->join('area', 'people.area_id', '=', 'area.id')->select('people.*', 'package.amount', 'area.area_name')->whereNull('stop_date')->where('re_survey_date', '>', $TodayDate)->where('is_approved', '=', 'Approved')->where('area_id', '=', 1)->sum('amount');?>
                      <td>{{$sum_O_amount}}/=</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <!---->

          </div>
        </div>
        <!---Summary Box End---->
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <!-- <script>
            $(document).ready(function(){
              $('[data-toggle="popover"]').popover({content: "[<a href='#'>Click me</a>]", trigger: "focus"});   
            });
            </script> -->

            <!-- The Institutions Modal -->
  <div class="modal" id="InstModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #003b5c;">
          <h1 class="modal-title text-light">Institution's Reg. Form</h1>
          <button type="button" class="close" style="color: red;" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <!------------------>
              <label for="General Info" style="margin-bottom: 0px; font-weight: bold;">General Information:</label>
              <hr style="margin-top: 0px; margin-bottom: 14px;" />
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Institute Name</span>
                            </div>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <!------------------>
                         <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">No. of Students</span>
                            </div>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Area</span>
                            </div>
                            <select class="custom-select" name="status">
                                <option>Choose Area</option>
                                <option value="Korangi">Korangi</option>
                                <option value="Orangi">Orangi</option>
                            </select>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Start Date</span>
                            </div>
                            <input class="form-control" name="startdate" type="date" value="" ><!-- id="example-datetime-local-input" -->
                        </div>
                        <!------------------>
                        <label for="Amount" style="margin-bottom: 0px; font-weight: bold;">Amounts:</label>
                        <hr style="margin-top: 0px; margin-bottom: 14px;"/>
                        <!------------------>
                        <emp class="text-muted" style="font-size: 10px;">Grocery</emp>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Grocery Amt.</span>
                              </div>
                              <input type="text" class="form-control" name="grocery_amt">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Grocery Invoice</span>
                              </div>
                              <input type="text" class="form-control" name="grocery_inv">
                            </div>
                          </div>
                        </div>



                        <div class="input-group control-group mb-3 input-group-sm increment" >
                          <div class="input-group-prepend">
                            <span class="input-group-text">Grocery Invoive Image</span>
                            </div>
                          <input type="file" name="grocery_inv_img[]" class="form-control">
                          <div class="input-group-btn"> 
                              <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-remove"></i> &#10011;</button>
                          </div>
                        </div>

                        <div class="clone d-none">
                          <div class="input-group control-group mb-3 input-group-sm " style="margin-top:10px">
                            <input type="file" name="grocery_inv_img[]" class="form-control">
                            <div class="input-group-btn"> 
                              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> &#10007;</button>
                            </div>
                          </div>
                        </div>
                        <!------------------>
                        <emp class="text-muted" style="font-size: 10px;">Grocery</emp>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Grocery Amt.</span>
                              </div>
                              <input type="text" class="form-control" name="grocery_amt">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Grocery Invoice</span>
                              </div>
                              <input type="text" class="form-control" name="grocery_inv">
                            </div>
                          </div>
                        </div>
                        
                        <div class="input-group control-group mb-3 input-group-sm increment" >
                          <div class="input-group-prepend">
                            <span class="input-group-text">Grocery Invoive Image</span>
                            </div>
                          <input type="file" name="grocery_inv_img[]" class="form-control">
                          <div class="input-group-btn"> 
                              <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-remove"></i> &#10011;</button>
                          </div>
                        </div>

                        <div class="clone d-none">
                          <div class="input-group control-group mb-3 input-group-sm " style="margin-top:10px">
                            <input type="file" name="grocery_inv_img[]" class="form-control">
                            <div class="input-group-btn"> 
                              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> &#10007;</button>
                            </div>
                          </div>
                        </div>
                        <!------------------>
                        <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Chicken Amt.</span>
                            </div>
                            <input type="text" class="form-control" name="noofperson">
                        </div>
              <!----------------->
            </div>
          </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" value="Save" class="btn btn-success" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">ADD</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Discard</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-------------------Scripts Scetion-------------->

  <script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
  </body>
</html>