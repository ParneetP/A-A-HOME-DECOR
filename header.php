<!DOCTYPE html>
<?php include('connection.php'); ?>

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

<script src="tools/tools/js/jquery-1.11.1.min.js"></script>
<script src="tools/tools/js/bootstrap.js"></script>

</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="banner-top">
			<div class="container">
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
				<div class="w3layouts-banner-right">
					<h1><a href="tools/index.html">A&A HomeDecor</a></h1>
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
									<span>HOMEDECOR</span>
									 PRODUCTS</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at gravida libero. Quisque mauris urna, feugiat sed nisi et, dignissim tincidunt neque.</p>
									<div class="w3-button">
										<a href="tools/single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
							<li>	
								<div class="w3layouts-banner-info">
									<h4>THE BEST
									<span>HOMEDECOR</span>
									PRODUCTS1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at gravida libero. Quisque mauris urna, feugiat sed nisi et, dignissim tincidunt neque.</p>
									<div class="w3-button">
										<a href="tools/single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
				<link rel="stylesheet" href="tools/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="tools/tools/js/jquery.flexslider.js"></script>
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
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a class="active" href="index.php">Home</a></li>
								<li><a href="#" class="scroll">About</a></li>
								<li><a href="#" class="scroll">Products</a></li>
								<li><a href="#" class="scroll">Contact</a></li>
							</ul>
							<div class="clearfix"> </div>							
						</div>	
					</nav>		
				</div>
		</div>
	</div>
