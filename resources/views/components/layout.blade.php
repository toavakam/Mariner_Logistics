<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">


	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
<meta name="description" content="ELIPSE BLC is a modern state-of-the art business and logistics centre built in 2009 on 4.6 hectares of land in a highly prominent location in the territory of the business park of International Airport RIGA">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
		rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('css/coworking.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Mariner Logistics</title>
	<style>
		.img_logo {
			height: 55px !important;
			max-height: 55px;
		}

		@media (max-width: 576px) {
			#logo img {
				height: 40px !important;
				max-height: 40px !important;
				margin: 10px 0 !important;
			}

			.hero-features {
				transform: none;
				margin: 1rem 0.5rem;
			}
		}

		.cnvs-hamburger .cnvs-hamburger-inner,
		.cnvs-hamburger .cnvs-hamburger-inner::before,
		.cnvs-hamburger .cnvs-hamburger-inner::after {
			background-color: #fff;
		}

		.contacts {
			background: url(contact.png) no-repeat;
		}

		#locations-carousel .owl-stage-outer {
			padding-bottom: 0px;
		}

		.grid-item img {
			max-height: 339px;
		}

		.masonry-thumbs>* {
			margin: 0px;
			padding: 0px;
		}

		.fluid-width-video-wrapper {
			height: 100%;
		}

		#header-wrap,
		#header {
			background-color: #335489 !important;
			border-color: #fff;
			border-bottom: #335489;

		}

		.sticky-header {
			background-color: #335489 !important;
		}

		.menu-link {
			color: #fff;
		}

		.menu-link:hover {
			color: #428bca;
		}

		.color {
			color: #335489 !important;
		}

		.cnvs-hamburger {
			color: #fff !important;
		}

		.section {
			margin-top: 0 !important;
		}

		.dropdown:hover .dropdown-menu {
			display: block;
			min-width: 20px;
		}

		.dropdown>.dropdown-toggle:active {
			pointer-events: none;
		}

		.btn {
			color: #fff !important;
			border-top-color: #335489;
		}

		.btn:hover {
			color: #428bca !important;
			border-color: #335489;
		}

		.dropdown-item:hover {
			color: #428bca;
		}

		.lang {
			margin-left: 2px;
			padding-left: 6px;
			border-style: solid;
			border-width: 1px;
			border-left-color: rgba(245, 248, 254, 0.7);
			border-bottom-color: #335489;
			border-right-color: #335489;
		}
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
		<x-header />

{{ $slot }}

        <!-- Footer
		============================================= -->
		<footer id="footer" class="border-0" style="background-color: #335489;">



<!-- Copyrights
============================================= -->
<div id="copyrights" class="bg-transparent dark">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <p class="mb-2 text-white-50">Copyrights &copy; 2023<br>All Rights Reserved by Mariner
                    Technologies.</p>
            </div>
            <div class="col-2">
                <a href="https://hili.company">
                    <img src="{{asset('images/h-stamp-white.png')}}" alt="Hili Logo"
                        class="footer-logo mx-auto mb-0" style="max-height: 80px"> </a>
            </div>
        </div>

    </div>

</div><!-- #copyrights end -->

</footer><!-- #footer end -->


</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="uil uil-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/functions.bundle.js')}}"></script>
    </body>