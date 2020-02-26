	<div class="footer" style="background:grey;">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="https://www.facebook.com/aahomedecor47/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="border"></div>
			<div class="agileits-w3layouts-copyright">
				<p>A & A Home Decor</a></p>
				
			</div>
		</div>
	</div>
	<iframe width="2000" height="269" id="gmap_canvas" src="https://maps.google.com/maps?q=Collingwood%20Park%204301%2C%20%20Brisbane%20%2C%20Australia&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
<script type="text/javascript" src="tools/js/easing.js"></script>
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

<script src="tools/js/owl.carousel.js"></script>  
<script src="tools/js/responsiveslides.min.js"></script>  
<script src="tools/js/jarallax.js"></script>  

<script>
$( document ).ready( function() {

$('body').noisy({
    intensity: 0.2,
    size: 200,
    opacity: 0.28,
    randomColors: false, // true by default
    color: '#000000'
});
  
	//Google Maps JS
	//Set Map
	function initialize() {
			var myLatlng = new google.maps.LatLng(53.3333,-3.08333);
			var imagePath = 'https://maps.google.com/maps?q=Collingwood%20Park%2C%20Redbank%20QLD%204301%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed';
			var mapOptions = {
				zoom: 11,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
				var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		//Callout Content
		var contentString = 'Some address here..';
		//Set window width + content
		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 500
		});

		//Add Marker
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: imagePath,
			title: 'image title'
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		//Resize Function
		google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);

});
</script>


</body>	
</html>