<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>A&A HomeDecor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="tools/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="tools/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="tools/css/owl.carousel.css" type="text/css" media="all">
<link href="tools/css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="tools/css/cm-overlay.css" />
<link href="tools/css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<script src="tools/js/jquery-1.11.1.min.js"></script>
<script src="tools/js/bootstrap.js"></script>
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
	});
}); 
</script>
<!-- light-box -->
<!-- //light-box -->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="banner-top">
			<div class="container">
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="https://www.facebook.com/aahomedecor47/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href ="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
				<div class="w3layouts-banner-right">
				<a href="index.php" ><img src="tools/images/aahdaus.png.png" style="height:110px;width:150px;margin-right:-65px;" alt="" /></a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-bottom">
			<div class="container">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3layouts-banner-info">
									<h4>A WIDE
									<span>SELECTION</span>
									OF PRODUCTS</h4>
									<p>Browse A&A Home Decor wode selection of products by catagory </p>
									<div class="w3-button">
										<a href="#" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="w3layouts-banner-info">
									<h4>THE BEST
									<span>HOMEDECOR</span>
									SERVICES</h4>
									<p>Get Membership of A&A Home decor and take advantage of services </p>
									<div class="w3-button">
										<a href="#" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
				<link rel="stylesheet" href="tools/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="tools/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							$('body').removeClass('loading');
							}
						});
					});
				</script>
				<!-- //flexSlider -->
			</div>
		</div>
		<div class="w3-nav">
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a  href="index.php" class="scroll">Home</a></li>
								<li><a href="about.php" class="scroll">About</a></li>
								<li><a href="gallery.php" class="scroll">Gallery</a></li>
								<li><a href="products_bedsheets.php" class="scroll">Products</a></li>
								<li><a href="#contact" class="scroll">Contact us</a></li>
								<?php if(isset($_SESSION['user_Firstname'])){ ?>
									<li><a href="watchlist.php" class="scroll">Wishlist</a></li>
									<li><a href="codes/logout.php" class="scroll">Logout</a></li>
								<?php } else{ ?>
									<li><a href="login.php" class="scroll">Login</a></li>
									<li><a href="signup.php" class="scroll">Signup</a></li>
								<?php }?>
							</ul>
							<div class="clearfix"> </div>			
						</div>	
					</nav>		
				</div>
		</div>
	</div>
	<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>