<?php include('header2.php'); ?>
<!------ Include the above in your HEAD tag ---------->
<style>
.header{
			border-top: 3px solid #28a745;
			background: gray;
			color: #fff;
			width: 70%;
			padding: 1%;
		}
		.header-left i{
			margin-left: 5%;
		}
		.header-right h4{
			text-align: right;
			margin-right: 10%;
			line-height: 2; 
		}
		.content{
			background: gray;
			width: 70%;
		}
		.content .form-content{
			padding:10%;
		}
		.content .form-content .input-group .input-group-text{
		
			color:#fff;
			border:none;
			border-radius:0;
			font-weight: 600;
		}
		.content .form-content .input-group input{
			    border-radius: 0;
		}
		.content .form-content .input-group input:focus{
			border-color: transparent;
		}
		.content .form-content h4{
			margin-bottom:5%;
		}
		.content .form-content button{
	
			color: #fff;
			border-radius: 0;
			width: 75%;
			font-weight: 600;
		}
</style>
<?php
      $user='root';
      $pass='';
      $db='homedecor';
      $pid=$_GET['pid'];
      $conn=mysqli_connect('localhost',$user, $pass, $db);
      $ProductSQL = "select * from products where productid=$pid ";
      $ProductResult = mysqli_query($conn, $ProductSQL);?>
<?php while ($row = mysqli_fetch_assoc($ProductResult)) { ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<div class="container header">
		<div class="row">
			<div class="col-md-6 header-left">
	
			</div>
			<div class="col-md-6 header-right">
				<h4>Product Review for <?php echo $row['productname']?></p></h4>
			</div>
		</div>		
	</div>
	<div class="container content">
			<div class="form-content">
			<h4 style="color:white;">Please fill all the fields to send us reviews</h4>
            <form method="post" action="codes/reviews.php">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Your Name</span>
				  </div>
				  <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
                  <input type="hidden" name="product_id" value="<?php echo $row['productid']; ?>">
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Your Email</span>
				  </div>
				  <input type="text" name="email" class="form-control" aria-label="Password" aria-describedby="basic-addon2" required>
				</div>
                <div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Your Review</span>
				  </div>
				  <textarea name="message" class="form-control" aria-label="Password" aria-describedby="basic-addon2" required></textarea>
				</div>
				<div class="input-group mb-3">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
            </form>
		</div>
<?php } ?>
<?php include('footer.php')?>