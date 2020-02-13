

<html>
<?php
 include 'os_menu1.html'; 
 ?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
  <body>

    <!--the below will remain the same over all the pages, only the include will change-->
    <!--<a href="<?php echo $_SERVER['PHP_SELF']; ?>?language=l1">বাংলা</a> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?language=l2">English</a>-->
    <!--this will pull the selected content from the selected filename-->
  </body>
<body>
<div align="center">
    <form class="form-horizontal" role="form" method="post" action="reg.php?act=add">
  <?php
  include 'dbconnect.php';
if($_GET['act']=='add')
{
  $name=$_POST['name'];
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $chksql=mysql_query("SELECT *FROM users");
  $test=1;
  while ($row=mysql_fetch_array($chksql)) {
    # code...
    $chkusr=$row['uname'];
    if($chkusr==$uname)
    {
      $test=0;
      break;
    }
  }
  if($test==1)
  {
  $sql=mysql_query("INSERT INTO users(name,uname,password,address,mobile,email) VALUES('$name','$uname','$password','$address','$mobile','$email')");
  
  if($sql)
  {
    echo "Registration Successfully Completed.";
  }
  else
  {
    echo "Try again";
  }
}
else
{
  echo "Username already Exits. please try with another username.";
}

}
  ?>

  <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name"  id="inputSuccess4" maxlength="30" placeholder="Full Name">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $name1; echo '</p>'; ?>
  </div>

  <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">User Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username"  id="inputSuccess4" maxlength="30" placeholder="Username">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $name1; echo '</p>'; ?>
  </div>
  <div class="form-group has-success has-feedback">
    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password"  id="inputSuccess4" placeholder="Password">
    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
    <?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $pwd1; echo '</p>'; ?>
  </div>
   <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address"  id="inputSuccess4" maxlength="50" placeholder="Address">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $name1; echo '</p>'; ?>
  </div>
  
   <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">Mobile</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="mobile"  id="inputSuccess4" maxlength="30" placeholder="Mobile">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $name1; echo '</p>'; ?>
  </div>
     <div class="form-group has-success has-feedback">
    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email"  id="inputSuccess4" maxlength="30" placeholder="Email">
     <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div><?php echo '<p style="color:#FF0000;font-weight:bold;">'; echo $name1; echo '</p>'; ?>
  </div>
  
  
<input type="submit" name="submit" id="submit" value="Register Now">
</form>
For Login <a href="index.php">Click Here</a>
</div>
</body>
</html>