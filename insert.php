<?php include 'header1.php';?>
<?php
$con=mysqli_connect("localhost","root","","online_shop");
if(mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysql_connect_error();
	}
$sql="INSERT INTO customer_info (name,mobile,address)
VALUES
('$_POST[name]','$_POST[number]','$_POST[address]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "<br/>Thank You";


?>