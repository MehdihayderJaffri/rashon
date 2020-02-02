

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>Due Survey | IRMS</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
     <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">       
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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

      .bg-navbar{
        background-color: #003b5c;
      }

      .far{
        color: #003b5c;
      }
      .active{
        font-weight: bold;
        background-color: #fafcff;
        color: #333;
      }

      body{
        background-color: #fafcff;
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

                      <li class="nav-item dropdown"><a href="#" class="text-white nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Families</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/person">Family List</a>
                              <a class="dropdown-item" href="../public/experson">Expired Family</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="nav-link  dropdown-toggle text-white" id="navbardrop" data-toggle="dropdown">Requisit Form</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="../public/requisition_form">Approval</a>
                              <a class="dropdown-item" href="../public/rejected_persons">Rejected</a>
                              <a class="dropdown-item" href="../public/pending_persons">Pending</a>
                              <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                          </div>
                      </li>

                      <li class="nav-item dropdown"><a href="#" class="active nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown">Survey</a>
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

    
    <div class="container-fluid mt-5 p-1">

        <!-- <div class="container bg-light">
          
          <emp style="font-size:12px;">php echo "&nbsp;" . '<b>' . " Total Due Survey(s):" . '</b>' . '&nbsp;' . count($duesurvey); </emp>
          <button type="button" id="myBtn" class="btn btn-sm btn-primary p-1 float-right" data-toggle="modal" data-target="#myModal"><i class='fas fa-user-plus'> </i> Add Person</button>
        </div> -->
    
        <!--table Ini--->
        <table id="duesurvey" class="table table-hover shadow-sm table-striped border">
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
            <th>Stop Date</th>
            <th>Time Period</th>
            <th>Action</th> 
         </tr>
         </thead>
 
         <tbody>
         @foreach ($duesurvey as $dsrv)   
         <tr>
          
          <td>{{ $dsrv -> id }}</td>
          <td>{{ $dsrv -> name }}</td>
          <td>{{ $dsrv -> fh_name }}</td>
          <td>{{ $dsrv -> status }}</td>
          <td>{{ $dsrv -> factor }}</td>
          <td>{{ $dsrv -> no_of_person }}</td>
          <td>{{ $dsrv -> son_age }}</td>
          <td>{{ $dsrv -> nic_no }}</td>
          <td>Rs.{{ $dsrv -> amount }}/=</td>
          <td>{{ $dsrv -> area_name }}</td>
          <td>{{ $dsrv -> start_date }}</td>
          <td>{{ $dsrv -> survey_date }}</td>
          <td>{{ $dsrv -> re_survey_date }}</td>
          <td>{{ $dsrv -> extension_date }}</td>
          <td>{{ $dsrv -> stop_date }}</td>
          <td>{{ $dsrv -> time_period }}</td>
          
            <td>
                <div class="dropdown dropright">
                    <button type="button" class="btn btn-sm pt-0 pb-0 pl-1 pr-1 border-dark btn-default dropdown-toggle" data-toggle="dropdown" style="font-size:10px;">
                      Action
                    </button>
                    <div class="dropdown-menu">

                      <!-------------->
                      <a class="dropdown-item" href="/dev_rationapp/public/uds/{{$dsrv->id}}"><img src="https://img.icons8.com/color/48/000000/cancel-2--v2.png" width="20%"> Edit</a>

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










 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#duesurvey').DataTable();
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


