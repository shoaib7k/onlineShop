<?php 
ini_set('display_errors', '0'); 
error_reporting(0);

define('TIMEZONE','Asia/Dhaka');
date_default_timezone_set(TIMEZONE);

//edit it with your "hosting address as loccalhost", "username as root", password as "".
$host="localhost";
$username="root";
$password="";


//connect mysql & don't edit it.

$db_name="online_shop";

mysql_connect("$host","$username","$password") or die ("Temporarily we are unable to connect due to the security issue, please get back soon..");
mysql_select_db("$db_name") or die ("Database Not Found");


?>