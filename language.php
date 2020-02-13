<?php
//sees if a link has been clicked on and the variable set
if (isset($_REQUEST['language'])) {
//finds out which language has been chosen
	if ($_REQUEST['language'] == 'l1') {
		$filename = 'os_menubangla.html';
	} elseif ($_REQUEST['language'] == 'l2') {
		$filename = 'os_menu1.html';
	} 
//if a link has not been clicked on and a variable been set then the $filename is set to the default filename
} else {
	$filename = 'os_menu1.html';
}
?>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<body>
		<!--the below will remain the same over all the pages, only the include will change-->
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?language=l1">বাংলা</a> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?language=l2">English</a>
		<!--this will pull the selected content from the selected filename-->
		<?php include($filename); ?>
	</body>
</html>