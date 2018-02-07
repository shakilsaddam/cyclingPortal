<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buy or Sale your used bicycles</title>
    <link rel="icon" href="../del-code.com/images/icon/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="del-code.com" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/media-query.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->



</head>
<body >
<div class="fh5co-loader"></div>
<div id="page">
    <!-- begin navbar -->
    <nav class="fh5co-nav" style="background-color: slategrey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-2"></div>
                    <div id="fh5co-logo" class="col-xs-8"><a href="index.html">Cycling Portal Bangladesh<span>.</span></a></div>
                    <div class="col-xs-2"><a href="/registration">Register</a></div>
                </div>
                <div class="col-xs-12 text-center menu-1">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="disc.html">Travelling Blog</a></li>
                        <!--
                        <li class="has-dropdown">
                            <a href="#">Travelling Blog</a>
                            <ul class="dropdown">
                                <li><a href="asian-dest.html">Asian</a></li>
                                <li><a href="japan-dest.html">Japan</a></li>
                                <li><a href="europe-dest.html">Europe</a></li>
                            </ul>

                        </li>-->
                        <li><a href="disc.html">Forum</a></li>
                        <li><a href="about.html">Buy or Sell</a></li>
                        <li><a href="blog.html">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->



    <!-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> -->

<div class="container" style="border-bottom: 2px solid slategrey; margin-top: 5px" >
    <div>
        <div class="col-sm-8">

        </div>
        <div class="col-sm-4">
            <div class="col-sm-8">
                <h4 style="float: right">Want to sell yours?</h4>
            </div>
            <div class="col-sm-4">
                <b style="float: left">
                    <a href="/userlogin">Login</a>
                </b>
            </div>
        </div>
    </div>
    <div>
        <div class="col-sm-9">
            <h3>Used bicycles for sale: </h3>
        </div>
        <div class="col-sm-3">
            <h5 style="float:right ">Sort by: Date of Posting</h5>
        </div>
    </div>

</div>



        @if(Session::has('login_failed_message'))
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Not Logged in !</strong> Please Login First.
            </div>
        @endif

    <!-- begin of Login -->
        {{--<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">--}}
        <div class="container" style="margin-bottom: 10px">
            <div class="loginmodal-container col-sm-6" style="float: left; margin-top: 10px">
                <div class="col-sm-8">
                    <img height="200px" width="200px"  src="\uploads\shakil.jpg"/>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <img height="100px" width="100px" src="\uploads\shakil.jpg"/>
                    </div>
                    <div class="col-sm-12">
                        <img height="100px" width="100px" src="\uploads\shakil.jpg"/>
                    </div>
                </div>

                <div class="container col-sm-12 text-center" style="border: 1px solid black; margin-top: 10px;">

                    <h4 style="margin-top: 10px">Veloce Legion 10</h4>
                    <h5>Posted on: 19Jan 2018</h5>
                    <h4>Total Used: 1 year 7 month</h4>
                    <h4>Price: 15000/- (Nagotiatable)</h4>
                    <button type="submit" class="btn-primary">Details</button>

                </div>
            </div>

            <div class="loginmodal-container col-sm-6" style="float: right; margin-top: 10px">
                <div class="col-sm-8">
                    <img height="200px" width="200px"  src="\uploads\shakil.jpg"/>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <img height="100px" width="100px" src="\uploads\shakil.jpg"/>
                    </div>
                    <div class="col-sm-12">
                        <img height="100px" width="100px" src="\uploads\shakil.jpg"/>
                    </div>
                </div>

                <div class="container col-sm-12 text-center" style="border: 1px solid black; margin-top: 10px;">

                    <h4 style="margin-top: 10px">Veloce Legion 10</h4>
                    <h5>Posted on: 19Jan 2018</h5>
                    <h4>Total Used: 1 year 7 month</h4>
                    <h4>Price: 15000/- (Nagotiatable)</h4>
                    <button type="submit" class="btn-primary">Details</button>

                </div>
            </div>

        </div>

                {{--<h1>Login to Your Account</h1><br>
                <form method="POST" action="/">
                    <input type="text" name="email_address" placeholder="Email Address" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                </form>

                <div>
                    <a href="/registration">Register Now!</a>
                    <br>
                    <a href="#">Lost Your Password?</a>
                </div>--}}




    {{--</div>--}}
    <!-- End of Login -->



        <!-- begin footer -->
        <footer id="fh5co-footer">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; Md. Saddam Hossain shakil. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="https://facebook.com/shakil.saddam.7" target="_blank">Shakil</a> </small>
                        </p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="https://www.behance.net/delcode920dc4"><i class="icon-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->


<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="/js/main.js"></script>


</body>
</html>

