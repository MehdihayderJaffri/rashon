

<!-- @guest
            Hello guest, do you want to register?
@endguest -->

<!DOCTYPE html>
<html>

<head>
    <title>IRMS</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
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
        <a href="#" class="navbar-brand">Ideal Ration Management System</a>
        <ul class="navbar-nav ">
            <li class="nav-item active"><a href="../public/person" class="nav-link">Families</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Survey</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Generation</a></li>
        </ul>
        </div>
    </div>
    <!---Nav End---> 


   




<!------INSERT Modal Start---->
<div class="container">
  
   

    <form action="/rationapp/public/stopping/{id}" method="POST" enctype="multipart/form-data">
        @foreach ($query1 as $queries)
        @csrf
        <input type="text" name="comment" value="{{$queries1->comment}}">

        <input type="submit" value="Yes">
        <input type="button" value="No">
        @endforeach
    </form>

  
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


