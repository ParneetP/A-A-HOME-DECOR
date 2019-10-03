 <?php
//local
$username = "root";
$password = "";  
$hostname = "localhost"; 


//connection to the database
$db_handle = mysqli_connect($hostname,$username,$password) or die("Unable to connect to MySQL");


$selected = mysqli_select_db($db_handle,"homedecore") or die("Could not select database");

error_reporting(0);
?>