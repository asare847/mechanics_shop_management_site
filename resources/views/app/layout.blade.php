<!DOCTYPE HTML>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="w3ctheme">
		<meta name="description" content="Joytun Health Supplement HTMl5 Template">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<!-- title here -->
		<title>Joytun - Home Two</title>		
        <!-- Favicon and Touch Icons -->
        <link rel="shortcut icon" href="assets/images/fav.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">	
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">																		
		<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">	
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css')}}">	
		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}} " />
		<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
	</head>
	<body>
			@include('app.navbar')
            @yield('content')
			@include('app.footer');
        
		<!-- footer area start here -->
		<!-- js file start -->
		<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
		<script src="{{ asset('assets/js/plugins.js')}}"></script>
		<script src="{{ asset('assets/js/Popper.js')}}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>	
		<script src="{{ asset('assets/js/scrollup.js')}}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>	
		<script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
		<script src="{{ asset('assets/js/main.js')}}"></script>
		<!-- End js file -->
	</body>
</html>