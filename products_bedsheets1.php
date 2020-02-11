<?php include('header.php');?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/* font Awesome http://fontawesome.io*/
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
/* Animation.css*/
@import url(https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css);

.col-item {
  border: 1px solid #E1E1E1;
  background: #FFF;
  margin-bottom:12px;
}
.col-item .options {
  position:absolute;
  top:6px;
  right:22px;
}
.col-item .photo {
  overflow: hidden;
}
.col-item .photo .options {
  display:none;
}
.col-item .photo img {
  margin: 0 auto;
  width: 100%;
}

.col-item .options-cart {
  position:absolute;
  left:22px;
  top:6px;
  display:none;
}
.col-item .photo:hover .options,
.col-item .photo:hover .options-cart {
  display:block;
  -webkit-animation: fadeIn .5s ease;
  -moz-animation: fadeIn .5s ease;
  -ms-animation: fadeIn .5s ease;
  -o-animation: fadeIn .5s ease;
  animation: fadeIn .5s ease;
}
.col-item .options-cart-round {
  position:absolute;
  left:42%;
  top:22%;
  display:none;
}
.col-item .options-cart-round button {
  border-radius: 50%;
  padding:14px 16px;
  
}
.col-item .options-cart-round button .fa {
  font-size:22px;
}
.col-item .photo:hover .options-cart-round {
  display:block;
  -webkit-animation: fadeInDown .5s ease;
  -moz-animation: fadeInDown .5s ease;
  -ms-animation: fadeInDown .5s ease;
  -o-animation: fadeInDown .5s ease;
  animation: fadeInDown .5s ease;
}
.col-item .info {
  padding: 10px;
  margin-top: 1px;
}
.col-item .price-details {
  width: 100%;
  margin-top: 5px;
}
.col-item .price-details h1 {
  font-size: 14px;
  line-height: 20px;
  margin: 0;
  float:left;
}
.col-item .price-details .details {
  margin-bottom: 0px;
  font-size:12px;
}
.col-item .price-details span {
  float:right;
}
.col-item .price-details .price-new {
  font-size:16px;
}
.col-item .price-details .price-old {
  font-size:18px;
  text-decoration:line-through;
}
.col-item .separator {
  border-top: 1px solid #E1E1E1;
}

.col-item .clear-left {
  clear: left;
}
.col-item .separator a {
  text-decoration:none;
}
.col-item .separator p {
  margin-bottom: 0;
  margin-top: 6px;
  text-align: center;
}

.col-item .separator p i {
  margin-right: 5px;
}
.col-item .btn-add {
  width: 60%;
  float: left;
}
.col-item .btn-add a {
  display:inline-block !important;
}
.col-item .btn-add {
  border-right: 1px solid #E1E1E1;
}
.col-item .btn-details {
  width: 40%;
  float: left;
  padding-left: 10px;
}
.col-item .btn-details a {
  display:inline-block !important;
}
.col-item .btn-details a:first-child {
  margin-right:12px;
}
</style>
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
<body style="background:#efeeda;">
<div style="background:white;">
<div style="margin-left:430px;">
<a style="margin-right:20px;" href="#" class="logo">Bedsheets<span></span></a> 
<select style="margin-right:20px;" name="forma" onchange="location = this.value;">
<option value="products_bedsheets1.php">Bedsheets</option>
<option value="products_pillow1.php">Pillow Cases</option>
<option value="products_curtains1.php">Curtains</option>
<option value="products_cushion1.php">Cushions</option>
<option value="products_tablec1.php">Table Covers</option>
</select>
<div style="margin-right:20px;" class="wrapper">
<form method="post" action="products_search.php">
  <input type="text" name="search" placeholder="search.." />
  <span class="srch"></span>
</div>
<input type="submit" value="Search" class="button">
</form>
</div>
</div>
<?php
$user='root';
$pass='';
$db='homedecor';
$conn=mysqli_connect('localhost',$user, $pass, $db);
$ProductSQL = "select * from products where productcatagory='bedsheet' ";
$ProductResult = mysqli_query($conn, $ProductSQL);?>
<div class="w3ls-heading">
    <h3>Our Bedsheet Products</h3>
    <p>Browse our bedsheet products, get best prices</p>
</div>
<div class="container" style="margin-top:55px;">

<div class="row">
        
	</div>
</div>
<?php while ($row = mysqli_fetch_assoc($ProductResult)) { ?>
<div class="col-sm-3">
            <article class="col-item">
        		<div class="photo">
        			
        			
        			<a href="product_details.php?id=<?php echo $row['productid']?>"> <img  style="height:250px;width:300px;" src="tools/images/<?php echo $row['productimage']; ?>" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
                          
        					</p>
        					<h1>  <?php echo $row['productname']; ?></h1>
        					<span class="price-new">$<?php echo $row['productprice']; ?></span>
        				</div>
        			</div>
        		</div>
        	</article>
          
        </div>
<?php } ?>
        
</div>
</body>
<script>
/*Tooltip*/
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php include('footer.php');?>