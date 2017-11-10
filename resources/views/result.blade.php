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
<div id="page">

<!-- begin navbar -->
<nav class="fh5co-nav" style="background-color: slategrey">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="col-xs-2">

                </div>

                <div id="fh5co-logo" class="col-xs-8">
                    <div class="col-sm-12">
                        <a href="index.html">Cycling Portal Bangladesh<span>.</span></a>
                    </div>
                    <div class="col-sm-12">
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

                @if(Session::has('user_id'))
                    <div class="col-xs-2" style="color: white">
                        <div class="col-xs-9">
                            Logged as
                            <ul>
                                <li class="has-dropdown">
                                    <a href="#"><b>{{Session::get('user_name')}}</b></a>
                                    <ul class="dropdown">
                                        <li><a href="logout">LOGOUT</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-3">
                            <img height="50" width="50" src="uploads\{{Session::get('user_photo')}}" >
                        </div>
                    </div>
                @else
                    <div class="col-xs-1"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></div>
                    <div class="col-xs-1"><a href="/registration">Register</a></div>
                @endif
            </div>
        </div>
    </div>
</nav>
<!-- end navbar -->


<!-- begin of Search Result Showing -->
<div>
    <div class="modal-dialog">

        <div class="loginmodal-container">
            <h1>Result for Chasses no : <b>{{$chasses_no}}</b></h1><br>

            @if(count($bike_info)==0)
                <div class="col-lg-12 well center-block">
                        <h2>No Entry Found!!</h2> <br>
                </div>

            @else

            <table>
                @foreach ($bike_info as $bike)
                    <tr>
                        <td colspan="2"><h3><b>{{$bike->brand}} {{$bike->bike_model}}</b></h3></td>
                    </tr>

                    <tr>
                        <td><h3>Bike Photo:</h3></td>
                        <td><img height="60px" width="60px" src="uploads\{{$bike->bike_photo}}"></td>
                    </tr>
                    <tr>
                        <td><h3>Owner:</h3></td>
                        <td><h3><b>{{$bike->fname}}</b></h3></td>
                    </tr>
                    <tr>
                        <td><h3>Owner Photo:</h3></td>
                        <td><img height="60px" width="60px" src="uploads\{{$bike->profile_photo}}"></td>
                    </tr>
                    <tr>
                        <td><h3>Present Status:</h3></td>
                        <td><h3>
                                @if($bike->present_status=='Everything Ok')
                                    <b style="color: darkgreen">Everything OK!!

                                @elseif($bike->present_status=='Stollen')
                                    <b style="color: darkred">Stollen!!
                                @elseif($bike->present_status=='Damaged')
                                    <b style="color: #b6a338">Damaged!!
                                @endif
                                    </b>
                            </h3></td>
                    </tr>
                @endforeach
            </table>

            @endif

        </div>
    </div>
</div>

<!-- End of Search Result Showing -->


<!-- begin of Login -->
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
                    <a href="#">Register Now!</a>
                    <br>
                    <a href="#">Lost Your Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Login -->

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







