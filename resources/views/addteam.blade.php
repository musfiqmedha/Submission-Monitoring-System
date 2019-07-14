<!DOCTYPE html>
<html>
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


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		

		body {
    /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;*/
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
	</style>


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title></title>
</head>
<body>

     <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <li><h2>Submission  Monitoring  System</h2></li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                      <ul class="main-menu nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        @if (Auth::check())
                        <li><a href="course_reg">Add Courses</a></li>
                        @endif
                         <li><a href="mycourse">Courses</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <!-- <div class="flex-center position-ref full-height"> -->

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
                        @endguest

        <!-- </div> -->
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                       
                    </ul>
                </div>
            </div>
        </nav>

        
    </div>



	<div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{url('teamreg')}}" enctype="multipart/form-data">
            	{{ csrf_field() }}
                <h2>Team Registration</h2>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Team Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="t_name" placeholder="Team Name" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Student1" class="col-sm-3 control-label">Member 1</label>
                    <div class="col-sm-9">
                        <input type="text" id="Student1" name="student1" placeholder="Member 1" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Student2" class="col-sm-3 control-label">Member 2</label>
                    <div class="col-sm-9">
                        <input type="text" id="Student2" name="student2" placeholder="Member 2" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Student3" class="col-sm-3 control-label">Member 3</label>
                    <div class="col-sm-9">
                        <input type="text" id="Student3" name="student3" placeholder="Member 3" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Student4" class="col-sm-3 control-label">Member 4</label>
                    <div class="col-sm-9">
                        <input type="text" id="Student4" name="student4" placeholder="Member 4" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Student5" class="col-sm-3 control-label">Member 5</label>
                    <div class="col-sm-9">
                        <input type="text" id="Student5" name="student5" placeholder="Member 5" class="form-control" autofocus>
                    </div>
                </div>


                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Name or Description</label>
                    <div class="col-sm-9">
                        <input type="text" id="description" name="description" placeholder="Details about Project" class="form-control" autofocus>
                    </div>
                </div>


                  <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Select Course</label>
                    <div class="col-sm-9">
                        
                                 <select name="course_name">
                                    @foreach( $courses as $courses)
                               <option value="{{ $courses->course_name }}">{{ $courses->course_name }}</option>
                               @endforeach
                               
                          </select>
                          
  
                    </div>
                </div>


     





               
                
                
                
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->




</body>
</html>