<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Access Denied | You do not have permission to access this page.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/blog_vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/blog_vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="/blog_css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="/blog_vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/blog_css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/blog_css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                                <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="/blogs/home" class="navbar-brand"><h3>Travel Bangladesh with your Bicycle</h3></a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/blogs/home" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/LongTrip" class="nav-link ">Long Trip</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/ShortTrip" class="nav-link ">Short Trip</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/CrossCountry" class="nav-link ">Cross Country</a>
                    </li>
                </ul>
                <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
                {{--<ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>--}}
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8">
            <div class="container">
                <div class="post-single">
                    <h3>Access Denied!</h3> <p>You do not have permission to access this page.</p>
                </div>
            </div>
        </main>
        <aside class="col-lg-4">
            <!-- Widget [Search Bar Widget]-->
            <div class="widget search">
                <header>
                    <h3 class="h6">Search the blog</h3>
                </header>
                <form action="#" class="search-form">
                    <div class="form-group">
                        <input type="search" placeholder="What are you looking for?">
                        <button type="submit" class="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <!-- Widget [Latest Posts Widget]        -->
            <div class="widget latest-posts">
                <header>
                    <h3 class="h6">Latest Posts</h3>
                </header>
                <div class="blog-posts">
                    @foreach($latest_posts as $latest_posts)
                        <a href="/blogs/detail/{{$latest_posts->id}}">
                            <div class="item d-flex align-items-center">
                                <div class="image"><img src="/blog_img/photo/{{$latest_posts->cover_photo}}" alt="..." class="img-fluid"></div>
                                <div class="title"><strong>{{$latest_posts->title}}</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-clock">{{Carbon\Carbon::parse($latest_posts->date_of_posting)->format('d F | Y')}}</i></div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div></a>
                    @endforeach

                </div>
            </div>
            <!-- Widget [Categories Widget]-->
            <div class="widget categories">
                <header>
                    <h3 class="h6">Categories</h3>
                </header>
                <div class="item d-flex justify-content-between"><a href="/blogs/home">All Posts</a><span>{{$count_all_posts[0]->total}}</span></div>
                <div class="item d-flex justify-content-between"><a href="/blogs/LongTrip">Long Trip</a><span>{{$count_long_trip[0]->total}}</span></div>
                <div class="item d-flex justify-content-between"><a href="/blogs/ShortTrip">Short Trip</a><span>{{$count_short_trip[0]->total}}</span></div>
                <div class="item d-flex justify-content-between"><a href="/blogs/CrossCountry">Cross Country</a><span>{{$count_cross_country[0]->total}}</span></div>

            </div>
        </aside>
    </div>
</div>



<!-- Page Footer-->
<footer class="main-footer">
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; Md. Saddam Hossain shakil. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Designed & Developed by <a href="https://facebook.com/shakil.saddam.7" target="_blank">Shakil</a>
                        <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>