

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>Upcoming Survey | IRMS</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
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
    </style>
</head>

<body>

    <div class="container-fluid navbar pt-0 pb-0 navbar-dark navbar-expand-md bg-navbar">
        <div class="container">
        <a href="#" class="navbar-brand"><img src="https://img.icons8.com/plasticine/100/000000/trust.png" class="img-responsive" width="10%"> Ideal Ration Management System</a>
        <ul class="navbar-nav ">
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Families</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../public/person">Family List</a>
                    <a class="dropdown-item" href="../public/experson">Expired Family</a>
                    <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                </div>

            </li>
            <li class="nav-item dropdown active"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Survey</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../public/upcomingsurvey"><i class='far fa-calendar-alt'> </i> Upcoming Survey</a>
                    <a class="dropdown-item" href="../public/duesurvey"><i class='far fa-calendar-times'> </i> Due Survey</a>
                    <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                </div>

            </li>
            
            <li class="nav-item dropdown active"><a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Generation</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../public/surveypayroll"><i class='far fa-calendar-alt'> </i> Generate Survey List</a>
                    <a class="dropdown-item" href="../public/rationpayroll"><i class='far fa-calendar-times'> </i> Generate Ration List</a>
                    <!-- <a class="dropdown-item" href="#">Link 3</a> -->
                </div>

            </li>
        </ul>
        </div>
    </div>
    <!---Nav End---> 

    
    <div class="container-fluid mt-1 p-1">

        <div class="container bg-light p-3 mb-3">
          
          <emp style="font-size:12px;"><?php echo "&nbsp;" . '<b>' . " Total Upcoming Survey(s):" . '</b>' . '&nbsp;' . count($UpComeSurvey); ?></emp>
          <!-- <button type="button" id="myBtn" class="btn btn-sm btn-primary p-1 float-right" data-toggle="modal" data-target="#myModal"><i class='fas fa-user-plus'> </i> Add Person</button> -->
        </div>
    
        <!--table Ini--->
        <table id="upcomingtable" class="table table-hover shadow-sm table-striped border">
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
            <!--<th>Action</th> -->
         </tr>
         </thead>
 
         <tbody>
         @foreach ($UpComeSurvey as $upsrv)   
         <tr>
          
          <td>{{ $upsrv -> id }}</td>
          <td>{{ $upsrv -> name }}</td>
          <td>{{ $upsrv -> fh_name }}</td>
          <td>{{ $upsrv -> status }}</td>
          <td>{{ $upsrv -> factor }}</td>
          <td>{{ $upsrv -> no_of_person }}</td>
          <td>{{ $upsrv -> son_age }}</td>
          <td>{{ $upsrv -> nic_no }}</td>
          <td>Rs.{{ $upsrv -> amount }}/=</td>
          <td>{{ $upsrv -> area_name }}</td>
          <td>{{ $upsrv -> start_date }}</td>
          <td>{{ $upsrv -> survey_date }}</td>
          <td>{{ $upsrv -> re_survey_date }}</td>
          <td>{{ $upsrv -> extension_date }}</td>
          <td>{{ $upsrv -> stop_date }}</td>
          <td>{{ $upsrv -> time_period}}</td>
          
            <!-- <td>
                <div class="dropdown dropright">
                    <button type="button" class="btn btn-sm btn-default border-danger dropdown-toggle" style="font-size:10px;" data-toggle="dropdown">
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href=""> <i class='far fa-comment-dots'> </i> Add Comment</a>
                       data-toggle="modal" data-target="#myModal"  id="myBtn"
                      <a class="dropdown-item" href=""><i class='far fa-trash-alt'> </i> Delete</a>
                    </div>
                    
                </div>

             </td> -->

         </tr>
           @endforeach
         </tbody>

      </table>
      <!--table End--->
    </div>









 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#upcomingtable').DataTable();
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


