<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$blog_detail[0]->title}}</title>
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
                    <div class="post-thumbnail"><img src="/uploads/{{$blog_detail[0]->images}}" alt="..." class="img-fluid"></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">

                            <div class="date meta-last">{{ Carbon\Carbon::parse($blog_detail[0]->date_of_posting)->format('d F | Y') }} </div>
                            <div class="category"><a href="#">{{$blog_detail[0]->categories}}</a></div>


                            {{--<div class="category"><a href="#">{{$blog_detail[0]->categories}}--}}{{--</a><a href="#">Financial</a>--}}{{--</div>--}}
                        </div>
                        <h3>{{$blog_detail[0]->title}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h3>
                        <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="/uploads/{{$blog_detail[0]->profile_photo}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$blog_detail[0]->fname}} {{$blog_detail[0]->lname}}</span></div></a>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="date"><i class="icon-clock"></i><b>Last Updated On:</b>
                                    {{ Carbon\Carbon::parse($blog_detail[0]->last_updated)->format('d F | Y') }}</div>
                                {{--<div class="views"><i class="icon-eye"></i> 500</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>--}}
                            </div>
                        </div>
                        <div class="post-body">
                            <p>{{$blog_detail[0]->description}}</p>

                            {{--<p> <img src="img/featured-pic-3.jpeg" alt="..." class="img-fluid"></p>
                            <h3>Lorem Ipsum Dolor</h3>--}}
                            {{--<blockquote class="blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <footer class="blockquote-footer">Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>--}}
                        </div>
                        {{--<div class="post-tags"><a href="#" class="tag">#Business</a><a href="#" class="tag">#Tricks</a><a href="#" class="tag">#Financial</a><a href="#" class="tag">#Economy</a></div>
                        <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                                <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                                <div class="text"><strong class="text-primary">Previous Post </strong>
                                    <h6>I Bought a Wedding Dress.</h6>
                                </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                                <div class="text"><strong class="text-primary">Next Post </strong>
                                    <h6>I Bought a Wedding Dress.</h6>
                                </div>
                                <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>--}}

                        <!-- Latest updates of the post -->

                        <div class="post-comments">
                            <header>
                                <h3 class="h6">Latest updates of the post:</h3>
                            </header>
                            <div class="comment-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                            <div class="comment-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>

                        {{--<!-- Photo Gallery -->
                        <div class="post-comments">
                            <header>
                                <h3 class="h6">Photo Gallery of the post<span class="no-of-comments">(3)</span></h3>


                                <div class="container">
                                    --}}{{--<h2>Image Gallery</h2>
                                    <p>The .thumbnail class can be used to display an image gallery.</p>
                                    <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
                                    <p>Click on the images to enlarge them.</p>--}}{{--
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="/blog_img/gallery-1.jpg" target="_blank">
                                                    <img src="/blog_img/gallery-1.jpg" alt="Lights" style="width:100%">
                                                    --}}{{--<div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>--}}{{--
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="/w3images/nature.jpg" target="_blank">
                                                    <img src="/blog_img/gallery-2.jpg" alt="Nature" style="width:100%">
                                                    --}}{{--<div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>--}}{{--
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <a href="/w3images/fjords.jpg" target="_blank">
                                                    <img src="/blog_img/gallery-4.jpg" alt="Fjords" style="width:100%">
                                                    --}}{{--<div class="caption">
                                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>--}}{{--
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </header>

                            <div class="comment-body">

                            </div>

                            --}}{{--<div class="comment">
                                <div class="comment-header d-flex justify-content-between">
                                    <div class="user d-flex align-items-center">
                                        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="title"><strong>Jabi Hernandiz</strong><span class="date">May 2016</span></div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="comment-header d-flex justify-content-between">
                                    <div class="user d-flex align-items-center">
                                        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="comment-header d-flex justify-content-between">
                                    <div class="user d-flex align-items-center">
                                        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>--}}{{--
                        </div>--}}
                        {{--<div class="add-comment">
                            <header>
                                <h3 class="h6">Leave a reply</h3>
                            </header>
                            <form action="#" class="commenting-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="username" id="username" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="username" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-secondary">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>--}}
                    </div>
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
                            <div class="image"><img src="/uploads/{{$latest_posts->images}}" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>{{$latest_posts->title}}</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-clock">{{Carbon\Carbon::parse($latest_posts->date_of_posting)->format('d F | Y')}}</i></div>
                                    {{--<div class="comments"><i class="icon-comment"></i>12</div>--}}
                                </div>
                            </div>
                        </div></a>

                        @endforeach
                    {{--<a href="#">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="/blog_img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a><a href="#">
                        <div class="item d-flex align-items-center">
                            <div class="image"><img src="/blog_img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div></a>--}}
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
            <!-- Widget [Tags Cloud Widget]-->
            {{--<div class="widget tags">
                <header>
                    <h3 class="h6">Tags</h3>
                </header>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
                </ul>
            </div>--}}
        </aside>
    </div>
</div>

<!-- Photo Gallery -->
<div class="container" style="margin-bottom: 50px;">
    <div class="post-single">
        <header>
            <h3 class="h6">Photo Gallery of the post</h3>
            <div class="container" style="margin-top: 30px">
                {{--<h2>Image Gallery</h2>
                <p>The .thumbnail class can be used to display an image gallery.</p>
                <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
                <p>Click on the images to enlarge them.</p>--}}
                <div class="row">

                    @foreach($blog_images as $blog_image)

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="/uploads/{{$blog_image->image_name}}" target="_blank">
                                <img src="/uploads/{{$blog_image->image_name}}" alt="Lights" style="width:100%">
                                {{--<div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>--}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="/w3images/nature.jpg" target="_blank">
                                <img src="/blog_img/gallery-2.jpg" alt="Nature" style="width:100%">
                                --}}{{--<div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>--}}{{--
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="/w3images/fjords.jpg" target="_blank">
                                <img src="/blog_img/gallery-4.jpg" alt="Fjords" style="width:100%">
                                --}}{{--<div class="caption">
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                </div>--}}{{--
                            </a>
                        </div>
                    </div>--}}
                </div>
            </div>


        </header>

        <div class="comment-body">
        </div>
    </div>
</div>





<!-- Page Footer-->
<footer class="main-footer">
    {{--<div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <h6 class="text-white">Bootstrap Blog</h6>
                </div>
                <div class="contact-details">
                    <p>53 Broadway, Broklyn, NY 11249</p>
                    <p>Phone: (020) 123 456 789</p>
                    <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
                    <ul class="social-menu">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menus d-flex">
                    <ul class="list-unstyled">
                        <li> <a href="#">My Account</a></li>
                        <li> <a href="#">Add Listing</a></li>
                        <li> <a href="#">Pricing</a></li>
                        <li> <a href="#">Privacy &amp; Policy</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li> <a href="#">Our Partners</a></li>
                        <li> <a href="#">FAQ</a></li>
                        <li> <a href="#">How It Works</a></li>
                        <li> <a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-posts"><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span></div>
                        </div></a><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span></div>
                        </div></a><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><strong>Best coffee shops in Sydney</strong><span class="date last-meta">October 26, 2016</span></div>
                        </div></a></div>
            </div>
        </div>
    </div>--}}
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