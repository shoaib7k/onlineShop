<?php

include "os_menu1.html";
?>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 

<body>
<h2>Online Shopping</h2><br> 
<h3 style="font-color:red;"> You have to Login first</h2>


<br />
<legend>User Login</legend>
<form method="POST" action="index.php?act=login" class="form-horizontal" role="form">
<?php
include "include/session.php";
include "dbconnect.php";
if($_GET['act']=='login')
{
$username=$_POST['username'];
$password=$_POST['password'];
    if (empty($username) || empty($password))
				  {
				  echo '<font color="#66CC00"> All Are Required Field! </font>';
				  }
				  else
				  { 
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
if($rec=mysql_fetch_array(mysql_query("SELECT * FROM users WHERE uname='$username' AND password = '$password'"))){
	if(($rec['uname']==$username)&&($rec['password']==$password)){
	 include "include/newsession.php";
     echo '<script type="text/javascript">
<!--
window.location = "index1.php";
//-->
</script>';	
				} 
		}	
	else {
		session_unset();
		echo "<div style='text-align:center;'>";
echo "<font face='Verdana' size='2' color='red'> Invalid Username and Password! </font> ";
		echo "</div>";
	}
	}
}
?>

<fieldset >
<div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">User Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username"  id="inputSuccess4" maxlength="15" placeholder="User Name">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $mobile1; echo '</p>'; ?>
  </div>
  <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password"  id="inputSuccess4" maxlength="15" placeholder="Password">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $mobile1; echo '</p>'; ?>
  </div>
 <p><input type="submit" value="Login Now"></p>
For Registration <a href="reg.php">Click Here</a>
<br /><br />
<!--For Login <a href="log.php">Click Here</a>
-->
</footer>
</body>
</div>
</html>