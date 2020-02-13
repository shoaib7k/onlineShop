<?php include 'header2.php';?>
<?php
$con=mysqli_connect("localhost","root","","online_shop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM customer_info");

echo "<table border='1' bgcolor='B73F3F'>
<tr>
<th>Customer Name</th>
<th>Mobile Number</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>