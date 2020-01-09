<?php include('header.php'); ?>
<head>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="tools/pay/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="tools/pay/js/jquery.min.js"></script>
</head>
<div class="main" style="background:#e8f8ff;"> 
		<div class="content">
			<script src="tools/pay/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
					</script>
						<div class="sap_tabs" style="display: block;width: 242%;margin-left: -426px;">
							<div id="horizontalTab" >
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic2"></label>COD</span></li>
                                          <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form>
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" value="">
													<h5>FIRST NAME</h5>													
														<input type="text" value="">
												</div>			
											</form>
											<h3 class="pay-title">Credit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-222">
										<div class="payment-info">
											<h3>Cash On Delivery</h3>
											<h4>Fill up below form for your address details</h4>
											<div class="login-tab">
												<div class="user-login">
													<form>
														<input type="text" name="name" placeholder="Full Name">
                                                        <input type="text" name="name" placeholder="Full Address">
                                                        <input type="text" name="name" placeholder="Contact Number">
                                                        <input type="text" name="name" placeholder="Pin code">
                                                        <input type="text" name="name" placeholder="City">
															<div class="user-grids">
																<div class="user-left">
																</div>
																<div class="user-right">
																	<input type="submit" value="Proceed">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
										</div>	
									</div>
								</div>	
							</div>
						</div>	
		</div>
	</div>
    <?php include('footer.php'); ?>