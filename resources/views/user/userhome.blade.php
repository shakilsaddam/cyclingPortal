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

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>




</head>
<body >



<div class="fh5co-loader"></div>
<div id="page">
    <!-- begin navbar -->
    <nav class="fh5co-nav" style="background-color: slategrey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">

                    @include('layout.menu')

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
                    <div class="col-sm-12" style="border: #9d9d9d 1px solid; padding: 5px;">
                        @foreach ($bikes as $bike)
                        <div class="col-sm-7">
                            <table>
                                <tr>
                                    <td>Brand: <b>{{$bike->brand}}</b></td>
                                </tr>
                                <tr>
                                    <td>Model: <b>{{$bike->bike_model}}</b></td>
                                </tr>
                                <tr>
                                    <td>Chasses No: <b>{{$bike->chasses_no}}</b></td>
                                </tr>
                                <tr>
                                    <td>Bike Status: <b>{{$bike->present_status}}</b></td>
                                </tr>
                            </table>
                        </div>
                        @endforeach


                        <div class="col-sm-5" style="float: bottom">
                            <button type="submit" class="btn-primary" style="width: 100%" onclick="location.href = '#'">Up For Sale</button>
                        </div>

                    </div>
                    <div class="col-sm-12" style="margin-top: 10px; border: #9d9d9d 1px solid; padding: 5px;">
                        <div class="col-sm-7">
                            <lavel>Change Bike Status</lavel>
                            <form action="updatebike" method="POST">
                                <select name="bike_status">
                                    <option value="Everything Ok">Everything OK</option>
                                    <option value="stollen">Stollen</option>
                                    <option value="Damaged">Damaged</option>
                                </select>
                                <input type="hidden" name="bike_id" value="{{$bike->id}}">
                                <button type="submit" class="btn-primary">Update</button>
                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">


                                {{--<button type="submit" class="btn-primary" onclick="location.href = 'update/bikestatus/{{$bike->id}}'">Update</button>--}}
                                {{--<input type="button" class="btn-primary" value="Update" name="update_bike_status"/>--}}
                            </form>
                        </div>
                        <div class="col-sm-5">
                            <form method="POST" action="viewdetails">
                                <input type="hidden" name="bike_id" value="{{$bike->id}}">
                                <button type="submit" class="btn-primary" style="width: 100%; margin-bottom: 5px">View Details</button>
                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                                {{--<input type="button" class="btn-primary" value="View Details" name="view_details"/>--}}
                                {{--<div class="col-xs-1"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></div>--}}<br>
                                <input type="button" class="btn-primary" value="Change Ownership" name="change_ownership" style="width: 100%;"/>
                            </form>
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
                            <form action="updatebike" method="POST">
                                <select name="bike_status">
                                    <option value="Everything Ok">Everything OK</option>
                                    <option value="stollen">Stollen</option>
                                    <option value="Damaged">Damaged</option>
                                </select>
                                <input type="hidden" name="bike_id" value="{{$bike->id}}">
                                <button type="submit" class="btn-primary">Update</button>
                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">


                            {{--<button type="submit" class="btn-primary" onclick="location.href = 'update/bikestatus/{{$bike->id}}'">Update</button>--}}
                            {{--<input type="button" class="btn-primary" value="Update" name="update_bike_status"/>--}}
                            </form>
                        </div>

                        <div class="col-sm-6">
                            <form method="POST" action="viewdetails">
                                <input type="hidden" name="bike_id" value="{{$bike->id}}">
                                <button type="submit" class="btn-primary">View Details</button>
                                <input type="hidden" name="_token" name="token" value="{{ csrf_token() }}">
                                {{--<input type="button" class="btn-primary" value="View Details" name="view_details"/>--}}
                                {{--<div class="col-xs-1"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></div>--}}<br>
                                <input type="button" class="btn-primary" value="Change Ownership" name="change_ownership"/>
                            </form>
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


        {{--<!-- View Details-->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Bike Details for Chasses no : <b>{{$bike->chasses_no}}</b></h1><br>

                        <table>
                            @foreach ($bikes as $bike)
                                <tr>
                                    <td colspan="2"><h3><b>{{$bike->brand}} {{$bike->bike_model}}</b></h3></td>
                                </tr>

                                <tr>
                                    <td><h3>Bike Photo:</h3></td>
                                    <td><img height="60px" width="60px" src="uploads\{{$bike->bike_photo}}"></td>
                                </tr>
                                --}}{{--
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
                                </tr>--}}{{--
                            @endforeach
                        </table>


                </div>
            </div>
        </div>--}}



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

    <!--Start of Up For Sale input-->
    <div class="modal-dialog">

        <div class="loginmodal-container">
            <h3>Enter other required information<b></b></h3><br>


            <table>
                <tr>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td><h4 style="color: red">Total Used: </h4></td>
                    <td><input type="text" name="total_used" placeholder="Ex. 1 year" required></td>
                </tr>
                <tr>
                    <td><h4 style="color: red">Price: </h4></td>
                    <td><input type="text" name="price" placeholder="Ex. 15000" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="nagotiatable" value="1"> Nagotiatable<br>
                        <input type="radio" name="nagotiatable" value="0"> Fixed<br>
                    </td>
                </tr>

                <tr>
                    <td><h4 style="color: red;">Comment:</h4></td>
                    <td><input type="text" name="comment" placeholder="place your comment here"></td>

                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="button" class="btn-primary" name="submit_other_info" style="float: right" value="SUBMIT"/>
                    </td>
                </tr>
            </table>



        </div>
    </div>

    <!--End of Up For Sale input -->

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
