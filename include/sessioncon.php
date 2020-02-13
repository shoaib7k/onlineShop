<?php

ini_set('display_errors', '0'); 
error_reporting(0);
include "include/session.php";
include "dbconnect.php";
$data=mysql_query("select* from users where uname='$_SESSION[username]'");	
		while ($call=mysql_fetch_array($data))
			{
			        $uname="".$call['uname']."";
					//$name="".$call['name']."";
			
		    }
			
	
		
		
		if($uname=='')
			{
				print "<script>";
       print " self.location='/shoaib/index.php'"; // Comment this line if you don't want to redirect
          print "</script>";
		  }
		 /* else
		  {
		  	include 'paypal/index.php';
		  }*/				
?>