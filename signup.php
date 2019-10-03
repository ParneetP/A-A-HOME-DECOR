<!DOCTYPE HTML>
<?php include("header.php");?>
<html>
<head>
	<link rel="stylesheet" href="tools/log/css/jquery-ui.css" />
	<link href="tools/log/css/style.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
</head>
<body>
	<h1 style="background:grey;margin-top: unset;">Register Here</h1>
	<div class="register-form-homedecor" style="margin-bottom: 81px;">
		<form action="codes/signup.php" method="post">
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="firstname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lastname" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text2">
					<select name="gender" class="form-control" style="height:50px;">
						<option>Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select> 
				</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="dob" type="text" placeholder="DOB" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"	required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
			</div>
			<div class="main-flex-w3ls-sectns">
			<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Phoneno" placeholder="Phone Number" >
				</div>			
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="address" placeholder="Address..."></textarea>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="password" name="password" placeholder="Password" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="password" name="confirm_password" placeholder="Confirm Password" required="">
				</div>
			</div>
			<div class="clear"></div>
			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
	</div>
	<script type="text/javascript" src="tools/log/js/jquery-2.2.3.min.js"></script>
	<script src="tools/log/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>

</body>
<?php include("footer.php");?>
</html>