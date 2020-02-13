<?php
//require '/home/mkg01/include/mysql.php';
$link = mysql_connect("localhost","root","");
mysql_select_db("online_shop");
$query = 'SELECT type,img FROM image WHERE id="' . $_GET['id'] . '"';
$result = mysql_query($query,$link);
$row = mysql_fetch_assoc($result);
header('Content-Type: ' . $row['type']);
echo $row['img'];
echo '<a href="transaction.php"><img src="http://www.phplinkdirectory.com/uploads/media/1/buy-now-button.png"> ';
?>