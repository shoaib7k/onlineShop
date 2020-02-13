<?php
//require '/home/mkg01/include/mysql.php';
include "os_menu1.html";
//session_start();
//include $_SESSION['filename'];
if ( !($link=mysql_connect("localhost","root","")) ) {
   die('<p>Error connecting to database</p></body></html>');
} else if ( !(mysql_select_db("online_shop")) ) {
   die('<p>Error selecting database</p></body></html>');
} else {
   $query = "SELECT id,name,alt FROM image_cloth";
   if ( !($result = mysql_query($query,$link)) ) {
      die('<p>Error reading database</p></body></html>');
   } else {
   echo "<table style='padding-left:100px;padding-top:70px;>";
   echo "<tr style='padding-left:100px;padding-top:100px;'>";
   
      for ( $i = 0 ; $i < mysql_num_rows($result) ; $i++ ) {
        $row = mysql_fetch_assoc($result);
	echo "<td style='width:200px;'>";
		//printf("\n");
        echo '<img src="gs_cloth.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'" img align="middle" height="150" width="150"/>' . "\n";
		
		echo	"<form action='paypal/index.php' method='post'>";
	
		
    /*   if($_SESSION['foe']=='l2') echo    " Price in Taka<input type='text' name='price' value='$row[alt]'><br>";
	 else if($_SESSION['foe']=='l1') echo   " দাম(টাকায়)<input type='text' name='price' value='$row[alt]'><br>";
*/
	echo    " Price in Taka<input type='text' name='price' value='$row[alt]'><br>";
		echo "<input type='submit' value='Buy Now'>";
		echo "</form>";

		echo "<br />";
		//echo  $row['alt'] ;
		//printf("\n\n");
		//printf("Price %s Taka",$row['alt']);
		echo "</td>";
      }
      
	echo "</tr>";
      echo "</table>";
   }
}
?>
<?php
include 'include/sessioncon.php';
?>