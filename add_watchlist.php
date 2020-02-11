<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add details of you wish product</h2>
  <form action="codes/watchlist.php" method="post">
    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Product Name" name="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Product Category:</label>
      <input type="text" class="form-control" placeholder="Enter Product Category" name="product_category">
    </div>
    <div class="form-group">
      <label for="pwd">Product Details:</label>
      <input type="text" class="form-control" placeholder="Enter Product Details" name="product_description">
    </div>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">

    <button type="submit" style="background:brown;color:white;" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>

	<?php include('footer.php'); ?>