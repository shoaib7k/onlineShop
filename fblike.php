<!--?php
$currentpageURL=curPageURL();
function curPageURL() {
$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
return $pageURL;
}
?-->
<iframe style="border: none; overflow: hidden; width: 550px; height: 80px;" src="http://www.facebook.com/plugins/like.php?href=<?php echo $currentpageURL;?>&layout=standard&show_faces=true&width=550&action=like&font&colorscheme=light&height=80" height="240" width="320" frameborder="0" scrolling="no"></iframe>


Related Searches
Site Design Company
Design Company
Professional Website Design
PHP Programmers
TowerTilt