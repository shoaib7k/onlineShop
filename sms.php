<?php
$Cell_Number = 'Cell Phone Number';
$Name = 'Name';
$Message = 'Short Message';

$murl = "http://www.smsdomain.com/api/sentsms.php?username='username'&password='admin_sms'&sender='from_name'&to='to_number'&message='short_message'";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $murl);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

$response = curl_exec($ch);
curl_close($ch);

?> 