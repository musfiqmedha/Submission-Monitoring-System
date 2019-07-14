<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">







 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" />

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <title></title>


  <style type="text/css">
    
    tbody{font-size: 16px;background-color: transparent;}
.thead{background-color: #1A1A1A;font-size: 18px; color: white;font-weight:normal;}
.btnS{float: right;background-color: hotpink;border: none;color: white;padding: 5px 15px;text-align: left;font-size: 14px;}
.btnS:focus{outline:none;}
.btnS:after {content: "Less";float: right;margin-left: 3px;}
.btnS.collapsed:after {content: "More";}
  </style>
</head>
<body>

<div id="app" class="container">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Submission Monitoring System</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      @if (Auth::check())
                        <li><a href="course_reg">Add Courses</a></li>
                        @endif
      <li class="nav-item">
        <a class="nav-link" href="/showcourse">Courses</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> -->
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register') }}">Register</a>
      </li>
    </ul>
  </nav>
</div>


  <div class="container">
  <h2>All Teams</h2>   <br>                                                                            
  <div id="boom" class="collapse show">
  <div class="table-responsive">
    <table class="table">
      <thead class="thead">
        <tr>

          <!-- <th>#</th> -->
          <th>Team Name</th>
          <th>Member 1</th>
         <th>Member 2</th>
         <th>Member 3</th>
         <th>Member 4</th>
         <th>Member 5</th>
         <th>Description</th>
         <th>Status</th>
         <th></th>

        </tr>
      </thead>
      <tbody>
        @foreach( $teams as $team)
        <tr>
         
          <!-- <td>{{$team->id}}</td> -->
          <td>{{$team->t_name}}</td>
          <td>{{$team->student1}}</td>
          <td>{{$team->student2}}</td>
          <td>{{$team->student3}}</td>
          <td>{{$team->student4}}</td>
          <td>{{$team->student5}}</td>
          <td>{{$team->description}}</td>
          <td>{{$team->status}}</td>
          


        </tr>

        @endforeach
        
      </tbody>


    </table>

  </div>
</div>

 
 <button type="button" class="btnS" data-toggle="collapse" data-target="#boom">Show</button>

</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</body>
</html>