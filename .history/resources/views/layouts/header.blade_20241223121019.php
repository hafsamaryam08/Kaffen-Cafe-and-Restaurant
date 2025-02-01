<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title') | Kaffen - Cafe & Restaurant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kaffen is a premium cafe and restaurant in Islamabad, Pakistan. Enjoy delicious meals, refreshing beverages, and a cozy ambiance perfect for any occasion.">
    <meta name="keywords" content="Cafe, Restaurant, Islamabad, Pakistan, Food, Beverages, Cozy Ambiance, Kaffen">
    <meta name="author" content="Kaffen Team">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Kaffen - Cafe & Restaurant | Islamabad, Pakistan">
    <meta property="og:description" content="Discover Kaffen, the best cafe and restaurant in Islamabad, offering mouth-watering dishes and a perfect dining experience.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.kaffen.com">
    <meta property="og:image" content="https://www.kaffen.com/images/og-image.jpg">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Kaffen - Cafe & Restaurant">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kaffen - Cafe & Restaurant | Islamabad, Pakistan">
    <meta name="twitter:description" content="Visit Kaffen in Islamabad for an exceptional dining experience with delicious food, beverages, and a welcoming atmosphere.">
    <meta name="twitter:image" content="https://www.kaffen.com/images/twitter-image.jpg">
    <meta name="twitter:site" content="@kaffencafe">

	<link rel="icon" href="frontend/assets/images/fvcn.png" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Oswald:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">

	<!-- BEGIN CSS STYLES -->
	<link rel="stylesheet" href="{{ url('frontend/assets/styles/bootstrap.css')}}" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/fonts/font-awesome/css/line-awesome.css" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/styles/animate.css" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/styles/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/styles/splitting.css" type="text/css" media="all" />
	<link rel="stylesheet" href="frontend/assets/styles/swiper.css" type="text/css" media="all" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<!-- END CSS STYLES -->

    <!-- BEGIN CSS STYLES -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/styles/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome/css/line-awesome.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/styles/animate.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/styles/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/styles/splitting.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/styles/swiper.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/styles/style.css') }}" type="text/css" media="all" /> -->
    <!-- END CSS STYLES -->

</head>

<body>
	<div class="bg">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centre full-width">
				<div class="vertical-center">
					<div class="spinner-logo">
						<img src="frontend/assets/images/logo.png" alt="" />
						<div class="spinner-dot">
							<div class="spinner-line"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- Header -->
<header class="kf-header">

    <!-- topline -->
    <div class="kf-topline">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                <!-- hours -->
                <div class="kf-h-group"><i class="far fa-clock"></i><em>opening hours :</em> 08:00 am - 09:00 pm</div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-center">

                <!-- social -->
                <div class="kf-h-social">
                    <a href="facebook.html" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="twitter.html" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="instagram.html" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="youtube.html" target="blank"><i class="fab fa-youtube"></i></a>
                    <a href="linkedIn.html" target="blank"><i class="fab fa-linkedin"></i></a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-right">

                <!-- location -->
                <div class="kf-h-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <em>Location :</em> Super market, F-6 Markaz, Islamabad
                </div>

            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="kf-navbar">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                <!-- logo -->
                <div class="kf-logo">
                    <a href="index-2.html"><img src="frontend/assets/images/logo.png" alt="" /></a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 align-center">

                <!-- main menu -->
                <div class="kf-main-menu">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Pages</i></a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </div> 

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 align-right">
                <a href="#" class="kf-menu-btn"><span></span></a>
                <a href="#" class="kf-btn h-btn"><span>Book a table</span></a>
            </div>
        </div>
    </div>
</header>