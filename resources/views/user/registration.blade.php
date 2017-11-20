<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
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

    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>



</head>
<body >

<script>
    function check_pass() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_pass').value) {
            document.getElementById('submit').disabled = false;
            document.getElementById('message').innerHTML = '';

        } else {
            document.getElementById('submit').disabled = true;
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'password not matching !!!';
        }
    }
</script>


<div class="fh5co-loader"></div>
<div id="page">
    <!-- begin navbar -->
    <nav class="fh5co-nav" style="background-color: slategrey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-2"></div>
                    <div id="fh5co-logo" class="col-xs-8"><a href="index.html">Cycling Portal Bangladesh<span>.</span></a></div>

                    {{--<div class="col-xs-1"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></div>--}}
                    <div class="col-xs-1"><a href="userlogin">Login</a></div>
                    <div class="col-xs-1"><a href="registration">Register</a></div>
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



        <!-- begin header -->
        <header id="fh5co-header" style="background-color: slategrey";>
            <div class="container">
                <label><h2>Registration Form</h2></label>
                <div class="col-lg-12 well">
                    <div class="row">
                        <form method="POST" action="/registration" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter First Name Here.." class="form-control" name="fname" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter Last Name Here.." class="form-control" name="lname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Enter Email Address" class="form-control" name="email_address" required>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" id="password" onchange='check_pass();'>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Confirm Password</label><span id='message' style="text-align: right"></span>
                                        <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" onchange='check_pass();'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" placeholder="Enter Mobile Number" class="form-control" name="mobile_no" required>
                                </div>
                                <div class="form-group">
                                    <label>Facebook ID</label>
                                    <input type="text" class="form-control" name="facebook_id" required>
                                </div>
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="present_address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Profile Photo</label>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="profile_photo" required/>
                                </div>
                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                                <input type="submit"  value="SUBMIT" class="btn btn-lg btn-info" id="submit" disabled/>
                                {{--<button type="submit" name="submit" class="btn btn-lg btn-info" disabled>SUBMIT</button>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

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

    </div>

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
</html>



{{--
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>User Home </h1> {{ Session::get('email')}}

</body>
</html>--}}
