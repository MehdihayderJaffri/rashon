<!DOCTYPE html>
<html>
<head></head>
<body>

    @foreach ($persons as $exp)
	<h1>Add coments here</h1>
	<form action="/rationapp/public/addingcomments/{{$exp->id}}" method="POST" enctype="multipart/form-data">
        @csrf

                       <!--  <div class="input-group mb-3 input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Comment</span>
                            </div> -->
                            <input type="text" class="form-control" name="Comment">
                      <!--   </div> --><br/>

            <input type="submit" value="Save" class="btn btn-success">
           
        
        
        </form>
        @endforeach

       
</body>
</html>