<?php include('header2.php'); ?>
<style>
.logo{
  padding:10px;
  text-decoration:none;
  color:#E64980;
  border:1px solid #E64980;
  font-weight:1000;
}

.logo span{
  position:relative;
  display:inline-block;
  
  font-family:fontAwesome;
  width:20px;
  height:20px;
  color:black;
  transition:0.5s;
}

.logo span:after{
  position:absolute;
  content:'\00bb';
  top:5px;
  left:20px;
  color:white;
  opacity:0;
  transition:0.5s;
}

.logo:hover{
  padding-left:5px;
  padding-right:20px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  background:#E64980;
  color:white;
  transition-duration: 0.5s;
  }

.logo:hover span:after{
  opacity:1;
  left:0;
  padding-left:5px;
}

select{
  margin-right:5px;
 padding:10px;
  cursor:pointer;
}

input{
  padding:10px;
  outline:none;
  border:none;
  border-radius:10px;
  }

.srch{
  padding:10px;
  cursor:pointer;
  color:black;
}

.srch:after{
  content:'\f002';
  font-family:fontAwesome;
}

.wrapper{
  border:1px solid black;
  display:inline-flex;
  padding:0px;
  border-radius:10px;
  height: 45px;
}

@media(max-width:457px)
{
  select{
    display:none;
   }
  
  .menu-toggle{
    display:inline-flex;
  color:black;
  width:40px;
    float:right;
    font-size:40px;
  height:40px;
    text-align:center;
}
  
  .menu-toggle:after{
    content:'\f0c9';
    font-family:fontAwesome;
  }

  .menu-toggle.active:after{
    content:'\f00d';
    font-family:fontAwesome;
  }  
}

@media(max-width:356px){
  .wrapper{
    display:none;
  }
  
}
.button {
  color: #fff;
  text-decoration: none;
  background-color: #000;
  padding: 5px;
  border-radius: 0px;
  font-weight: 800;
  font-size: 20px;
  font-family: sans-serif;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
}

</style>
<div style="margin-left:430px;">
<a style="margin-right:20px;" href="#" class="logo">Bedsheets<span></span></a> 
<select name="forma" onchange="location = this.value;">
<option value="products_bedsheets.php">Bedsheets</option>
<option value="products_pillow.php">Pillow Cases</option>
<option value="products_curtains.php">Curtains</option>
<option value="products_cushion.php">Cushions</option>
<option value="products_tablec.php">Table Covers</option>
</select>
<div style="margin-right:20px;" class="wrapper">
<form method="post" action="products_search.php">
  <input type="text" name="search" placeholder="search.." />
  <span class="srch"></span>
</div>
<input type="submit" value="Search" class="button">
</form>
</div>
<?php
      $user='root';
      $pass='';
      $db='homedecor';
      $conn=mysqli_connect('localhost',$user, $pass, $db);
      $ProductSQL = "select * from products where productcatagory='table cover' ";
      $ProductResult = mysqli_query($conn, $ProductSQL);?>

<div class="menu-toggle"></div>
<div class="blog" id="blog">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Our Table Cover Products</h3>
				<p>Browse our Table Cover products, get best prices</p>
			</div>
      <?php while ($row = mysqli_fetch_assoc($ProductResult)) { ?>
			<div class="w3-agile-blog-grids">
				<div class="w3-agile-blog-grid">
					<div class="col-md-5 w3-agile-blog-left">
						<a href="single.html"><img src="tools/images/<?php echo $row['productimage']; ?>" alt="" /></a>
					</div>
					<div class="col-md-6 w3-agile-blog-right">
						<div class="w3-agile-blog-right-top">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right-top">
								<h4><a href="#"><?php echo $row['productname']; ?></a></h4>
								<p>Arrived At: <?php echo $row['arrivedat']?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-agile-blog-right-info">
							<p><?php echo $row['productdetails']; ?></a></p>
              <p>Price: $<?php echo $row['productprice']; ?></a></p>
              <a href="payment.php">Buy Now</a>
              <a href="reviews.php?pid=<?php echo $row['productid'] ?>">Reviews</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
      <?php } ?>
		</div>
	</div>

    <?php include('footer.php'); ?>