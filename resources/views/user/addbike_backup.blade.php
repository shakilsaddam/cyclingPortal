<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Bike</title>
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

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">--}}

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

                    <div class="col-xs-2" style="color: white">
                        <div class="col-xs-9">
                            Logged in as <b>{{Session::get('user_name')}}</b>
                        </div>
                        <div class="col-xs-3">
                            <img height="50" width="50" src="uploads\shakil.jpg" >
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 text-center menu-1">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="disc.html">Travelling Blog</a></li>

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
    <div>
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
                        <a href="/registration">Register Now!</a>
                        <br>
                        <a href="#">Lost Your Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Login -->



        <!-- begin header -->
        <header id="fh5co-header" style="background-color: slategrey";>
            <div class="container">
                <label><h2>Add New Bike</h2></label>
                <div class="col-lg-12 well">
                    <div class="row">
                        <form method="POST" action="/addbike" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Bike Brand:</label>
                                        <input type="text" placeholder="Enter Brand name ..." class="form-control" name="bike_brand">
                                        <label>Bike Model:</label>
                                        <input type="text" placeholder="Enter Model ..." class="form-control" name="bike_model">
                                        <label>Chasses No:</label>
                                        <input type="text" placeholder="Enter Chasses no ..." class="form-control" name="chasses_no">
                                        <label>Bike Description:</label>
                                        <textarea placeholder="Enter Bike Description.." rows="3" class="form-control" name="bike_description"></textarea>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Bike Photos:</label>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="bike_photo"/><br>
                                        <label>Buying Recept:</label>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="buying_recept"/>
                                        <br><br>
                                        <label>Present Status:</label>
                                        <select name="present_status">
                                            <option value="Everything OK">Everything OK</option>
                                            <option value="Stollen">Stollen</option>
                                            <option value="Damaged">Damaged</option>
                                        </select>
                                        <br><br>
                                        <label>Component Change Description:</label>
                                        <textarea placeholder="Enter Bike Change Description.." rows="3" class="form-control" name="change_description"></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-lg btn-info">SUBMIT</button>
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
