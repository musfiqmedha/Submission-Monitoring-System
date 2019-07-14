<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">



<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>


        <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">





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
  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- <a class="navbar-brand" href="#">Submission Monitoring System</a> -->
    <li><h3>Submission  Monitoring  System</h3></li>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      @if (Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/course_reg">Add Courses</a>
      </li>
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
   <!--  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register') }}">Register</a>
      </li>
    </ul> -->

                        @guest
                        <ul class="navbar-nav">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                            </ul>
                        @endguest

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
          <td> <button class="btn btn-primary btn-small" ><a style="text-decoration: none; color: white;" href="{{route('team.activate',[$course_name,$team->id])}}">Start</a></button></td>

          <td> <button class="btn btn-primary btn-small" ><a style="text-decoration: none; color: white;" href="{{route('team.deactivate',[$course_name,$team->id])}}">Finish</a></button></td>


        </tr>

        @endforeach
        
      </tbody>


    </table>
    <div style="text-align:center">
<a href="/addteam">Add team</a></div>
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