	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>{{config('sekolah.tittle')}}</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('/front')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('/front')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('/front')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('/front')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('/front')}}/css/nice-select.css">							
			<link rel="stylesheet" href="{{asset('/front')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('/front')}}/css/owl.carousel.css">			
			<link rel="stylesheet" href="{{asset('/front')}}/css/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('/front')}}/css/main.css">
		</head>
		<body>	
			@yield('front')
		 </body>

			<script src="{{asset('/front')}}/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="{{asset('/front')}}/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('/front')}}/js/vendor/bootstrap.min.js"></script>			
			<script src="{{asset('/front')}}/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('/front')}}/js/easing.min.js"></script>			
			<script src="{{asset('/front')}}/js/hoverIntent.js"></script>
			<script src="{{asset('/front')}}/js/superfish.min.js"></script>	
			<script src="{{asset('/front')}}/js/jquery.ajaxchimp.min.js"></script>
			<script src="{{asset('/front')}}/js/jquery.magnific-popup.min.js"></script>	
    		<script src="{{asset('/front')}}/js/jquery.tabs.min.js"></script>						
			<script src="{{asset('/front')}}/js/jquery.nice-select.min.js"></script>	
			<script src="{{asset('/front')}}/js/owl.carousel.min.js"></script>									
			<script src="{{asset('/front')}}/js/mail-script.js"></script>	
			<script src="{{asset('/front')}}/js/main.js"></script>	
		</body>
	</html>