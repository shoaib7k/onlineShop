
<?php
$con=mysqli_connect("localhost","root","","online_shop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user");


mysqli_close($con);
?>