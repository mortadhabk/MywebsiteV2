<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">
    
<!-- Mirrored from www.okler.net/previews/porto/10.1.0/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 14:13:56 GMT -->
<head>
        
        <!-- Basic -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post Full Width | Porto - Multipurpose Website Template</title>	

        <meta name="keywords" content="WebSite Template" />
        <meta name="description" content="Porto - Multipurpose Website Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css')}}">



	</head>
	<body data-plugin-page-transition>

		<div class="body">


			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-grey page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-dark font-weight-bold text-8">{{$projects->name}}</h1>
								<span class="sub-title text-dark">{{$projects->created_at}}</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="/">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">
<div class="post-image ms-0">
										<a href="blog-post.html">
											<img src="img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
										</a>
									</div>

									<div class="post-date ms-0">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content ms-0">

										<h2 class="font-weight-semi-bold"><a href="blog-post.html">{{$projects->name}}</a></h2>

										<div class="post-meta">
											<span><i class="far fa-user"></i> By <a href="#">Mortadha boubaker</a> </span>
										</div>

										<p>{!!$projects->description!!}</p>
										

                                
								</article>

							</div>
						</div>
					</div>

				</div>

			</div>

		</div>



<!-- Vendor -->
<script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('js/theme.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('js/theme.init.js') }}"></script>

	</body>

<!-- Mirrored from www.okler.net/previews/porto/10.1.0/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 14:13:56 GMT -->
</html>
