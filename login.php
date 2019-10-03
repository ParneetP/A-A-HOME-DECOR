<!DOCTYPE HTML>
<?php include("header.php");?>
<html>

<head>
	<link rel="stylesheet" href="tools/log/css/jquery-ui.css" />
	<link href="tools/log/css/style.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
</head>

<body>
	<!--background-->
	<h1 style="background:grey;margin-top: unset;">Login Here</h1>
	<div class="register-form-homedecor" style="margin-bottom: 81px;">
		<!-- Form starts here -->
		<form action="#" method="post">
			<h3 class="sub-heading-agileits">Login Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="password" name="password" placeholder="Password" required="">
				</div>
			</div>
			
			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>

	<script type="text/javascript" src="tools/log/js/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="tools/log/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>
<?php include("footer.php");?>
</html>