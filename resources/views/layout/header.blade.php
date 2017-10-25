<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Cycle by Chasses no</title>
    <link rel="icon" href="../del-code.com/images/icon/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="del-code.com" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media-query.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body >
<div class="fh5co-loader"></div>
<div id="page" style="background-color: slategrey">
    <!-- begin navbar -->
    <nav class="fh5co-nav" style="background-color: slategrey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-2"></div>
                    <div id="fh5co-logo" class="col-xs-8"><a href="index.html">Cycling Portal Bangladesh<span>.</span></a></div>
                    <div class="col-xs-1"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></div>
                    <div class="col-xs-1"><a href="/registration">Register</a></div>
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
                        <!--   <li><a href="contact.html">Contact</a></li>  -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- begin of Login -->
    <!-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                    <form method="POST">
                        <input type="text" name="email_address" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                        <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                    </form>

                    <div>
                        <a href="#">Register Now!</a>
                        <br>
                        <a href="#">Lost Your Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Login -->



        <!-- begin header -->
{{--        <header id="fh5co-header" class="fh5co-cover" style="background-color: slategrey";>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <div class="container">
                                    <div class="inner-addon right-addon">
                                        <i class="glyphicon glyphicon-search"></i>
                                        <input type="text" class="form-control" placeholder="Search" style="background-color: inherit "/>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="button" class="btn-primary" value="SEARCH"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>--}}
        <!-- end header -->
    <form method="get" action="\bike">
        <h2 style="text-align: center">Your owned bikes</h2>
        <div class="container" style="background-color: #8c8c8c;">
            <p style="color: white; text-align: center">No entry found! Please click <b>Add Bike</b> button to add your bike</p>
            <input class="btn-primary" type="button" name="add_bike" value="Add Bike"\>
        </div>

        <div class="container col-xs-6" style="background-color: #7da8c3">
            <div class="col-xs-6" style="color: white">
                <label>Brand:</label><br>
                <label>Model:</label><br>
                <label>Chasses No:</label><br>
                <label>Bike Status:</label><br>
            </div>
            <div class="col-xs-6" style="color: white">
                <label>Brand:</label><br>
                <label>Model:</label><br>
                <label>Chasses No:</label><br>
                <label>Bike Status:</label><br>
            </div>

            <div class="col-xs-5" style="background-color: #fff7c7">
                <label>Change Bike Status</label><br>
                <select class="form-control" name="bike_status">
                    <option>OK</option>
                    <option>Stollen</option>
                    <option>Damaged</option>
                </select>
            </div>
            <div class="col-xs-2"> </div>
            <div class="col-xs-5 container" align="center" style="background-color: #fff7c7" >
                <input type="button" class="btn-primary" value="View Details"/><br>
                <input type="button" class="btn-primary" value="Change Ownership"/>
            </div>
        </div>
    </form>

</div>


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

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>


</body>

<!-- Mirrored from travela.del-code.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 18:34:47 GMT -->
</html>
