
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Classic Hotel a Hotel Category Flat Bootstrap Responsive Website Template | single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" media="screen" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner page-head">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Classic Hotel</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
					<ul class="nav1">
						<li><a href="index.html" data-hover="HOME">HOME</a></li>
						<li><a href="about.html" data-hover="ABOUT">ABOUT</a></li>
						<li><a href="typography.html" data-hover="SERVICES">SERVICES</a></li>
						<li><a href="booking.html" data-hover="BOOKING">BOOKING</a></li>
						<li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li>
					</ul>
				</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
				
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="f1"></a></li>
					<li><a href="#" class="f2"></a></li>
					<li><a href="#" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner -->
<!--single-page-->
<div class="single-page">
	<div class="container">
		<div class="col-md-8 single-gd-lt">
			<div class="single-pg-hdr">
				<h2><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Grand Park Hyatt</h2>
				<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>
				<p>Jump to: <a href="single.html">Over View</a>|<a href="single.html">Room Choices</a>|<a href="single.html">Hotel Information</a></p>
			</div>
			<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/bbb.jpg">
									<img src="images/bbb.jpg" alt=""/>
								</li>
								<li data-thumb="images/ccc.jpg">
									<img src="images/ccc.jpg" alt=""/>
								</li>
								<li data-thumb="images/ddd.jpg">
									<img src="images/ddd.jpg" alt=""/>
								</li>
								<li data-thumb="images/eee.jpg">
									<img src="images/eee.jpg" alt=""/>
								</li>
								<li data-thumb="images/ggg.jpg">
									<img src="images/ggg.jpg" alt=""/>
								</li>
								<li data-thumb="images/bbb.jpg">
									<img src="images/bbb.jpg" alt=""/>
								</li>
								<li data-thumb="images/ccc.jpg">
									<img src="images/ccc.jpg" alt=""/>
								</li>
								<li data-thumb="images/ddd.jpg">
									<img src="images/ddd.jpg" alt=""/>
								</li>
								<li data-thumb="images/eee.jpg">
									<img src="images/eee.jpg" alt=""/>
								</li>
								<li data-thumb="images/ggg.jpg">
									<img src="images/ggg.jpg" alt=""/>
								</li>
								<li data-thumb="images/bbb.jpg">
									<img src="images/bbb.jpg" alt=""/>
								</li>
								<li data-thumb="images/ccc.jpg">
									<img src="images/ccc.jpg" alt=""/>
								</li>
								<li data-thumb="images/ddd.jpg">
									<img src="images/ddd.jpg" alt=""/>
								</li>
								<li data-thumb="images/eee.jpg">
									<img src="images/eee.jpg" alt=""/>
								</li>
								<li data-thumb="images/ggg.jpg">
									<img src="images/ggg.jpg" alt=""/>
								</li>
								<li data-thumb="images/ccc.jpg">
									<img src="images/ccc.jpg" alt=""/>
								</li>
								<li data-thumb="images/ddd.jpg">
									<img src="images/ddd.jpg" alt=""/>
								</li>
								<li data-thumb="images/bbb.jpg">
									<img src="images/bbb.jpg" alt=""/>
								</li>
								<li data-thumb="images/ccc.jpg">
									<img src="images/ccc.jpg" alt=""/>
								</li>
							</ul>
			</div>
						<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

		</div>
		<div class="col-md-4 single-gd-rt">
			<div class="spl-btn">
				<div class="spl-btn-bor">
					<a href="#" data-toggle="tooltip" title="Save up to 50% on this stay">
						<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
																	
					</a>
					<p>Special Offer</p>	
					<script>
						$(document).ready(function(){
						$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
				</div>
				<div class="sp-bor-btn text-right">
					<h4><span>$8,750</span> $4,850</h4>
					<p class="best-pri">Best price</p>
					<a class="best-btn" href="booking.html">Book Now</a>
				</div>
			</div>
			<div class="map-gd">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63718.72916803739!2d102.31975295000002!3d3.489618449999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ceba2007355f81%3A0xd2ff1ad6a3ca801!2sMentakab%2C+Pahang%2C+Malaysia!5e0!3m2!1sen!2sin!4v1439535856431"></iframe>
			</div>
			<div class="other-comments">
				<div class="comments-head">
					<h3>Excellent</h3>
					<p>4.5/5</p>
					<div class="clearfix"></div>
				</div>
				<div class="comments-bot">
					<p>"Food and rooms are very good to stay. Iam very happy to stay in such a nice hotel".</p>
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> John Doe</h4>
				</div>
				<div class="comments-bot">
					<p>"This is the 19th visit for me. Overall very happy with the service, the breakfast spread & the efficiency of the staff. ".</p>
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Luther</h4>
				</div>
				<div class="comments-bot">
					<p>"A very pleasant hotel with good staff and a great attitude.".</p>
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Patrick</h4>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//single-page-->
<!--footer-->
<div class="footer">
		<div class="container">				 	
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="typography.html">Services</a></li>					
					<li><a href="booking.html">Booking</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
					 <h3>FACILITIES</h3>
					 <ul>
						 <li><a href="#">Double bedrooms</a></li>
						 <li><a href="#">Single bedrooms</a></li>
						 <li><a href="#">Royal facilities</a></li>						
						 <li><a href="#">Connected rooms</a></li>
					 </ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
				<h3>GET IN TOUCH</h3>
				<ul>
					<li>Ola-ola street jump,</li>
					<li>260-14 City, Country</li>
					<li>+62 000-0000-00</li>
				</ul>
			</div>
			<div class="col-md-3 ftr-logo">
				<a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Classic Hotel</a>
				<ul>
					<li><a href="#" class="f1"> </a></li>
					<li><a href="#" class="f2"> </a></li>
					<li><a href="#" class="f3"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer-->
<!-- copy -->
<div class="copy-right">
	<div class="container">
			<p> &copy; 2015 Classic Hotel. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!-- //copy -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>