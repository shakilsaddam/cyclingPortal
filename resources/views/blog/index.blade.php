<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel Bangladesh with your Bicycle</title>
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
				<!-- Navbar Brand --><a href="index.html" class="navbar-brand"><h3>Travel Bangladesh with your Bicycle</h3></a>
				<!-- Toggle Button-->
				<button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
			</div>
			<!-- Navbar Menu -->
			<div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/blogs/home" class="nav-link @if($to_active=="home") active @endif">Home</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/LongTrip" class="nav-link @if($to_active=="LongTrip") active @endif">Long Trip</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/ShortTrip" class="nav-link @if($to_active=="ShortTrip") active @endif">Short Trip</a>
                    </li>
                    <li class="nav-item"><a href="/blogs/CrossCountry" class="nav-link @if($to_active=="CrossCountry") active @endif">Cross Country</a>
                    </li>
                </ul>
				<div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
                {{--<ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>--}}
			</div>
		</div>
	</nav>
</header>

<!-- Hero Section-->
<section style="background: url(/blog_img/hero.jpg); background-size: cover; background-position: center center" class="hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<h1>Bootstrap 4 Blog - A free template by Bootstrap Temple</h1><a href="#" class="hero-link">Discover More</a>
			</div>
		</div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
	</div>
</section>
<!-- Intro Section-->
<!--
<section class="intro">

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2 class="h3">Some great intro here</h2>
        <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
      </div>
    </div>
  </div>

</section>-->
<div class="container intro">
	<div class="row">
		<!-- Latest Posts -->
		<main class="posts-listing col-lg-12">
			<div class="container">
				<div class="row">
					<!-- post -->

					@foreach($blog_posts as $blog_post)

					<div class="post col-xl-4">
						<div class="post-thumbnail"><a href="/blogs/detail/{{$blog_post->id}}"><img src="/blog_img/photo/{{$blog_post->cover_photo}}" alt="..." class="img-fluid"></a></div>
						<div class="post-details">
							<div class="post-meta d-flex justify-content-between">
								<div class="date meta-last">{{ Carbon\Carbon::parse($blog_post->date_of_posting)->format('d F | Y') }} </div>
								<div class="category">
                                    <a href="
                                        @if($blog_post->category=='short trip')
                                            /blogs/ShortTrip
                                        @elseif($blog_post->category=='Cross Country')
                                            /blogs/CrossCountry
                                        @elseif($blog_post->category=='long trip')
                                            /blogs/LongTrip
                                        @endif
                                    ">{{$blog_post->category}}</a>
                                </div>
							</div><a href="/blogs/detail/{{$blog_post->id}}">
								<h3 class="h4">{{$blog_post->title}}</h3></a>

							<p class="text-muted">{!!str_limit(html_entity_decode($blog_post->description), 200)!!}</p>
							{{--<a href="blogs/detail/{{$blog_post->id}}">view details</a>--}}
							<footer class="post-footer d-flex align-items-center"><a href="#" data-toggle="tooltip" title="Uploaded By" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="/uploads/{{$blog_post->profile_photo}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$blog_post->fname}} {{$blog_post->lname}}</span></div></a>
                                {{--<div class="date"><i class="icon-clock"></i>{{ Carbon\Carbon::parse($blog_post->last_updated)->format('d F | Y') }} </div>--}}
							</footer>
						</div>
					</div>

					@endforeach
                </div>
					{{--<!-- post             -->
					<div class="post col-xl-4">
						<div class="post-thumbnail"><a href="post.html"><img src="/blog_img/blog-post-2.jpg" alt="..." class="img-fluid"></a></div>
						<div class="post-details">
							<div class="post-meta d-flex justify-content-between">
								<div class="date meta-last">20 May | 2016</div>
								<div class="category"><a href="#">Business</a></div>
							</div><a href="post.html">
								<h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
									<div class="avatar"><img src="/blog_img/avatar-2.jpg" alt="..." class="img-fluid"></div>
									<div class="title"><span>John Doe</span></div></a>
								<div class="date"><i class="icon-clock"></i> 2 months ago</div>
								<div class="comments meta-last"><i class="icon-comment"></i>12</div>
							</div>
						</div>
					</div>
					<!-- post             -->
					<div class="post col-xl-4">
						<div class="post-thumbnail"><a href="post.html"><img src="/blog_img/blog-post-3.jpeg" alt="..." class="img-fluid"></a></div>
						<div class="post-details">
							<div class="post-meta d-flex justify-content-between">
								<div class="date meta-last">20 May | 2016</div>
								<div class="category"><a href="#">Business</a></div>
							</div><a href="post.html">
								<h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
									<div class="avatar"><img src="/blog_img/avatar-3.jpg" alt="..." class="img-fluid"></div>
									<div class="title"><span>John Doe</span></div></a>
								<div class="date"><i class="icon-clock"></i> 2 months ago</div>
								<div class="comments meta-last"><i class="icon-comment"></i>12</div>
							</div>
						</div>
					</div>
					<!-- post -->
					<div class="post col-xl-6">
						<div class="post-thumbnail"><a href="post.html"><img src="/blog_img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
						<div class="post-details">
							<div class="post-meta d-flex justify-content-between">
								<div class="date meta-last">20 May | 2016</div>
								<div class="category"><a href="#">Business</a></div>
							</div><a href="post.html">
								<h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
									<div class="avatar"><img src="/blog_img/avatar-1.jpg" alt="..." class="img-fluid"></div>
									<div class="title"><span>John Doe</span></div></a>
								<div class="date"><i class="icon-clock"></i> 2 months ago</div>
								<div class="comments meta-last"><i class="icon-comment"></i>12</div>
							</div>
						</div>
					</div>
				</div>--}}
				<!-- Pagination -->
				<nav aria-label="Page navigation example">
					<ul class="pagination pagination-template d-flex justify-content-center">
						<li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
						<li class="page-item"><a href="#" class="page-link active">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
					</ul>
				</nav>
			</div>
		</main>
		{{--<aside class="col-lg-4">
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
				<div class="blog-posts"><a href="#">
						<div class="item d-flex align-items-center">
							<div class="image"><img src="/blog_img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
							<div class="title"><strong>Alberto Savoia Can Teach You About</strong>
								<div class="d-flex align-items-center">
									<div class="views"><i class="icon-eye"></i> 500</div>
									<div class="comments"><i class="icon-comment"></i>12</div>
								</div>
							</div>
						</div></a><a href="#">
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
						</div></a></div>
			</div>
			<!-- Widget [Categories Widget]-->
			<div class="widget categories">
				<header>
					<h3 class="h6">Categories</h3>
				</header>
				<div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
				<div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
				<div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
				<div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
				<div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
			</div>
			<!-- Widget [Tags Cloud Widget]-->
			<div class="widget tags">
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
			</div>
		</aside>--}}
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
							<div class="image"><img src="/blog_img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
							<div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span></div>
						</div></a><a href="#">
						<div class="post d-flex align-items-center">
							<div class="image"><img src="/blog_img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
							<div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span></div>
						</div></a><a href="#">
						<div class="post d-flex align-items-center">
							<div class="image"><img src="/blog_img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
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
<script src="/blog_vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/blog_vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/blog_vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
<script src="blog_js/front.js"></script>
</body>
</html>