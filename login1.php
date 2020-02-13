<?php
//include 'os_menu2.html'; 
session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username&&$password)
	{
		$connect = mysql_connect("localhost","root","") or die("couldn't connect!");
		mysql_select_db("online_shop") or die("couldn't find db");
		
		$query = mysql_query("SELECT * FROM admin where user = '$username'");
		$numrow = mysql_num_rows($query);
		
		if($numrow!=0)
		{
			//code for login
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['user'];
				$dbpassword = $row['password'];
			}
			
			// check to see if they match!
			if($username==$dbusername&&$password==$dbpassword)
			{
				//echo "success! <a href='insert.php'>click</a>here to continue";
				include 'os_menu2.html'; 
				
				//$_SESSION['username']==$username;
			}
			else
				echo "Incorrect password!";
			
		}
		else 
			die("That user doesn't exits");
		
	}
	else
		die("please enter username & password");

?>