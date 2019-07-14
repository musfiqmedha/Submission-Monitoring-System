<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		

		body {
     /*background: #000000;
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
                        <!-- <li><a href="#">About</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
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
            <form class="form-horizontal" role="form" method="post" action="{{url('create')}}" enctype="multipart/form-data">
            	{{ csrf_field() }}
                <h2>Course Registration</h2>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Course Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="course_name" placeholder="Course Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Course_code" class="col-sm-3 control-label">Course Code</label>
                    <div class="col-sm-9">
                        <input type="text" id="code" name="course_code" placeholder="Course Code" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="credit" class="col-sm-3 control-label">Credit </label>
                    <div class="col-sm-9">
                        <input type="number" id="credit" placeholder="Credit" class="form-control" name= "credit">
                    </div>
                </div>

                <div class="form-group">
                    <label for="batch" class="col-sm-3 control-label">Batch </label>
                    <div class="col-sm-9">
                        <input type="text" id="batch" placeholder="Batch" class="form-control" name= "batch">
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->




</body>
</html>