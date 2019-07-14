<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Submission management</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Header -->
        <header id="header" class="transparent-nav">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <!-- <div class="navbar-brand">
                        <a class="logo" href="index.html">
                            <img src="./img/newlogo.png" alt="logo">
                        </a>
                    </div> -->
                    <nav id="nav">
                    <ul class="main-menu nav navbar-nav navbar-left">
                        <li><h2 style="color:white;">Submission  Monitoring  System</h2></li>
                    </ul>
                </nav>
                    <!-- /Logo -->

                    <!-- Mobile toggle -->
                    <button class="navbar-toggle">
                        <span></span>
                    </button>
                    <!-- /Mobile toggle -->
                </div>

                <!-- Navigation -->
                <nav id="nav">
                    <ul class="main-menu nav navbar-nav navbar-right">

                        <li><a href="/">Home</a></li>
                        <li><a href="/showcourse">Courses</a></li>
                        <!-- <li><a href="#">About</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                        <!-- <div class="flex-center position-ref full-height"> -->
            @if (Route::has('login'))
                <!-- <div class="top-right links"> -->
                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}">{{ Auth::user()->name}}</a><li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                
            @endif

        <!-- </div> -->
                    </ul>
                </nav>
                <!-- /Navigation -->

            </div>
            
        </header>
        <!-- /Header -->

        <!-- Home -->
        <div id="home" class="hero-area">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/projectlogo.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="white-text">A place to view submission of teams</h1>
                            <p class="lead white-text">Select your course and watch the running teams submitting their project. An efficient way to get idea about the expected time of your submission.</p>
                            <!-- <a class="main-button icon-button" href="#">Get Started!</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Home -->

        <!-- Courses -->
        <!-- <!-- <div id="courses" class="section">

        </div>
        <!-- /Courses -->
        <!-- Contact CTA -->
        <div id="contact-cta" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
            <!-- Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="white-text">Contact Us</h2>
                        <p class="lead white-text">Address: Dr. M. A. Wazed Mia IICT building, SUST, Sylhet   <br> Contact No: 01********* <br> Email: sust_cse@gmail.com</p>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Contact CTA -->

        <!-- Footer -->
        <footer id="footer" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- footer logo -->
                    <!-- <div class="col-md-6">
                        <div class="footer-logo">
                            <a class="logo" href="index.html">
                                <img src="./img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div> -->
                    <!-- footer logo -->

                    <!-- footer nav -->
                    <!-- <div class="col-md-6">
                        <ul class="footer-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div> -->
                    <!-- /footer nav -->

                </div>
                <!-- /row -->

                <!-- row -->
                <div id="bottom-footer" class="row">

                    <!-- social -->
                    <!-- <div class="col-md-4 col-md-push-8">
                        <ul class="footer-social">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- /social -->

                    <!-- copyright -->
                    <div class="col-md-8">
                        <div class="footer-copyright">
                            <span>&copy; All Rights Reserved by SUST-CSE</span>
                        </div>
                    </div>
                    <!-- /copyright -->

                    <!-- /new_copyright -->
                    <div>
                        
                    </div>
                    <!-- /new_copyright -->

                </div>
                <!-- row -->

            </div>
            <!-- /container -->

        </footer>
        <!-- /Footer -->

        <!-- preloader -->
        <div id='preloader'><div class='preloader'></div></div>
        <!-- /preloader -->


        <!-- jQuery Plugins -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
