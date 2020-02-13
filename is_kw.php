<?php
include "os_menu1.html";
session_start();
if(isset($_SESSION['username'])){
//echo $s=$_SESSION['username'];
echo '<a href="logout.php">Log Out</a>';
}
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="products-wrapper">
    <h1>Products</h1>
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM image_kw ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			//echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php?p=6">';
			//echo '<div class="product-thumb"><img src="gs_shoes.php'.$obj->image.'"></div>';
			//echo '<img src="$obj->image." img align="middle" height="100" width="90"/>' . "\n";
			//echo "<img src=gs_shoes.php?id='$obj[0]'>";
			$imgURL = "data:image/png;base64,".base64_encode($obj->image);  

			echo '<img src="'.$imgURL.'" height="120" width="120">' ;
           // echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            //echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-content">';
			echo 'Price '.$currency.$obj->alt.' | ';
			if(isset($_SESSION['username']))
			echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			else echo '<br>';
			if(isset($_SESSION['username']))
			echo '</br><button class="add_to_cart">Add To Cart</button>';
			else echo '<br>';
			//echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
    
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
     //   echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    
</div>

</body>
</html>
