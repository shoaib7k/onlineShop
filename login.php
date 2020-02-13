<?php /*include 'header.php';?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
	$con=mysqli_connect("localhost","root","","shopping_cart");
	if(!$con)
	die('Connection Failed'.mysql_error());
	mysql_select_db("shopping_cart") or die ("Couldnt find db");
}
else
echo die("Plese enter your Username & Password again");*/

$username=$_POST ['username'];
$password=$_POST['password'];

if ($username&&$password)
{
$con=mysql_connect("localhost","root","") or die
("couldn't connect!");
mysql_select_db("shopping_cart") or die("couldn't find db");


}
else
die ("please enter a username and password");
$result = mysqli_query($con,"SELECT * FROM admin");
echo "<table border='1'>
<tr>
<th>Publication ID</th>
<th>Publication Name</th>
<th>Publication Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['user'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>

