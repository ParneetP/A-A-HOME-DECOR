<!DOCTYPE HTML>
<?php include("header.php");?>
<html>
<head>
	
</head>
<body>
	<h1 style="background:grey;margin-top: unset;">Register Here</h1>
	<div class="register-form-homedecor" style="margin-bottom: 81px;">
		<form action="#" method="post">
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="firstname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lastname" placeholder="Last Name" required="">
				</div>
			</div>
<<<<<<< HEAD
			<div class="radio-section">
				<h6>Gender</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="gender">
						<label for="a-option" value="MALE">MALE</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="gender">
						<label for="b-option" value="FEMALE">FEMALE</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
=======
			
>>>>>>> d7a600bd5caad556106c4efba71c470ea968722a
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="dob" type="text" placeholder="DOB" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"	required="">
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
