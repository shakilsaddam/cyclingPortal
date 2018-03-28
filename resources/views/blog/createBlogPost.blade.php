<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uploading Blogs</title>
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


    <!-- include libraries(jQuery, bootstrap) -->
    {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>


    $(document).ready(function() {
        $('#description').summernote();
    });



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


<!-- The Form -->
<div class="container" style="margin-top: 30px">
    <fieldset>
        <legend><label>Write your experience here</label></legend>
        <form>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Enter title..">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_of_travelling" class="col-sm-2 col-form-label">Date of Traveling</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_of_travelling" name="date_of_travelling">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Select a Category</label>
                <div class="col-sm-10">
                    <select class="form-control" id="category" name="category">
                        <option>Short Trip</option>
                        <option>Long Trip</option>
                        <option>Cross Country</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>

                <div class="col-sm-10">
                </div>
                <div class="col-sm-12">
                    <textarea rows=3 class="form-control" id="description" placeholder="" name="description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="cover_photo" class="col-sm-2 col-form-label">Cover Photo</label>
                <div class="col-sm-10">
                    <input type="file" accept="image/png, image/jpeg, image/gif" name="cover_photo" required/>
                </div>
            </div>

            <div class="form-group row">
                <label for="photo_gallery" class="col-sm-2 col-form-label">Photos for Photo Gallery</label>
                <div class="col-sm-10">
                    <input type="file" accept="image/png, image/jpeg, image/gif" name="photo_gallery" required/>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </form>
    </fieldset>
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