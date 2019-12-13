<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Wishlist of <?php echo $_SESSION["user_Firstname"];?></h2>
  <p>List of products you wish us to add in A&A homedecor</p>
  <table class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Description</th>
      </tr>
    </thead>
    <tbody>