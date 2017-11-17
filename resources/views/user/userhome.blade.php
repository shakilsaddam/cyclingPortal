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
                </div>

            </div>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- begin of Login -->
    <!-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> -->
{{--
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
--}}

        <!-- End of Login -->



<!-- begin header -->
<header id="fh5co-header" style="background-color: slategrey";>
    <div class="container">
        <div class="container" style="text-align: center">
            <label><h2>Your owned bikes</h2></label>
        </div>

        @if(count($bikes)==0)
            <div class="col-lg-12 well">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <h3>No Entry Found!! Please Click <b>Add Bike </b> button to add your bike!</h3> <br>
                    <button type="submit" class="btn-primary" onclick="location.href = '/addbike'">Add Bike</button>
                </div>
                <div class="col-sm-2">
                </div>
            </div>

            @elseif(count($bikes)==1)
        <!--View Bikes info if exists Bike no-01 -->
            <div>
                <div class="col-lg-3"> </div>

                <div class="col-lg-6 well">
                    <div class="col-sm-12">

                        <div class="col-sm-6">
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                </tr>
                                <tr>
                                    <td>Model:</td>
                                </tr>
                                <tr>
                                    <td>Chasses No:</td>
                                </tr>
                                <tr>
                                    <td>Bike Status:</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table>
                                @foreach ($bikes as $bike)
                                    <tr>
                                        <td><b>{{$bike->brand}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->bike_model}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->chasses_no}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->present_status}}</b></td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>

                    </div>
                    <div class="col-sm-12" style="margin-top: 20px;">
                        <div class="col-sm-6">
                            <lavel>Change Bike Status</lavel>
                            <select name="bike_status">
                                <option value="ok">Everything OK</option>
                                <option value="stollen">Stollen</option>
                                <option value="Damaged">Damaged</option>
                            </select>

                            {{--<input type="button" class="btn-primary" value="Update" name="update_bike_status"/>--}}
                        </div>
                        <div class="col-sm-6">
                            <input type="button" class="btn-primary" value="View Details" name="view_details"/> <br>
                            <input type="button" class="btn-primary" value="Change Ownership" name="change_ownership"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"> </div>
            </div>
        <div class="col-sm-12">
            <button type="submit" class="btn-primary center-block" onclick="location.href = 'addbike'">Add New Bike</button>
        </div>

            {{--<div class="col-lg-2" style="background-color: slategrey";>

            </div>--}}
        @elseif(count($bikes)>=2)
        <!--View Bikes info if exists Bike no-02 -->
            <div>

                    @foreach ($bikes as $bike)
                <div class="col-lg-6 well">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                </tr>
                                <tr>
                                    <td>Model:</td>
                                </tr>
                                <tr>
                                    <td>Chasses No:</td>
                                </tr>
                                <tr>
                                    <td>Bike Status:</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table>
                                {{--@foreach ($bikes as $bike)--}}
                                    <tr>
                                        <td><b>{{$bike->brand}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->bike_model}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->chasses_no}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->present_status}}</b></td>
                                    </tr>
                                {{--@endforeach--}}
                            </table>

                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-top: 20px;">
                        <div class="col-sm-6">
                            <lavel>Change Bike Status</lavel>
                            <select name="bike_status">
                                <option value="ok">Everything OK</option>
                                <option value="stollen">Stollen</option>
                                <option value="Damaged">Damaged</option>
                            </select>
                            <button type="submit" class="btn-primary" onclick="location.href = 'update/bikestatus/{{$bike->id}}'">Update</button>
                            {{--<input type="button" class="btn-primary" value="Update" name="update_bike_status"/>--}}
                        </div>
                        <div class="col-sm-6">
                            <input type="button" class="btn-primary" value="View Details" name="view_details"/> <br>
                            <input type="button" class="btn-primary" value="Change Ownership" name="change_ownership"/>
                        </div>
                    </div>
                </div>
                    @endforeach

                <button type="submit" class="btn-primary center-block" onclick="location.href = 'addbike'">Add New Bike</button>
            </div>

            {{--<div>
                <div class="col-lg-6 well">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                </tr>
                                <tr>
                                    <td>Model:</td>
                                </tr>
                                <tr>
                                    <td>Chasses No:</td>
                                </tr>
                                <tr>
                                    <td>Bike Status:</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6">
--}}{{--                                    <table>
                                @foreach ($bikes as $bike)
                                    <tr>
                                        <td><b>{{$bike->brand}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->model}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->chasses_no}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>{{$bike->present_status}}</b></td>
                                    </tr>
                                @endforeach
                            </table>--}}{{--

                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-top: 20px;">
                        <div class="col-sm-6">
                            <lavel>Change Bike Status</lavel>
                            <select>
                                <option value="ok">Everything OK</option>
                                <option value="stollen">Stollen</option>
                                <option value="Damaged">Damaged</option>
                            </select>
                            <input type="button" class="btn-primary" value="Update" name="update_bike_status"/>
                        </div>
                        <div class="col-sm-6">
                            <input type="button" class="btn-primary" value="View Details" name="view_details"/> <br>
                            <input type="button" class="btn-primary" value="Change Ownership" name="change_ownership"/>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-primary center-block" onclick="location.href = 'addbike'">Add New Bike</button>
            </div>--}}

        @endif



        <div class="container" style="text-align: center; margin-bottom: 100px;">

        </div>

        <div class="container" style="text-align: center; margin-top: 100px;">
            <label><h2>Personal Information</h2></label>
        </div>

        <div class="col-lg-12 well">

            <div class="col-sm-2">
            </div>

            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <table>
                            <tr>
                                <td>Name: </td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                            </tr>
                            <tr>
                                <td>Mobile No: </td>
                            </tr>
                            <tr>
                                <td>Facebook ID: </td>
                            </tr>
                            <tr>
                                <td>Present Address: </td>
                            </tr>
                            <tr>
                                <td>Profile Photo: </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-sm-7">
                        <table>
                            @foreach($personal_info as $pi)
                            <tr>
                                <td><b>{{$pi->fname}} {{$pi->lname}}</b></td>
                            </tr>
                            <tr>
                                <td><b>{{$pi->email_address}}</b></td>
                            </tr>
                            <tr>
                                <td><b>{{$pi->mobile_no}}</b></td>
                            </tr>
                                <tr>
                                    <td><b>{{$pi->facebook_id}}</b></td>
                                </tr>
                            <tr>
                                <td><b>{{$pi->present_address}}</b></td>
                            </tr>
                            <tr>
                                <td><img height="100" width="100" src="uploads\{{$pi->profile_photo}}"></td>
                            </tr>

                           @endforeach
                        </table>
                    </div>
                    <input type="button" class="btn-primary" name="edit_personal_info" value="EDIT"/>
                </div>

            </div>

            <div class="col-sm-2">
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
