<?php
session_start();
include_once("config.php");


if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	session_destroy();
	header('Location:'.$return_url);
}


if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$product_id 	= filter_var($_POST["product_id"], FILTER_SANITIZE_STRING); 
	$product_qty 	= filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); 
	
	$return_url 	= base64_decode($_POST["return_url"]); 
	

	// if($product_qty > 10){
	// 	die('<div align="center">This demo does not allowed more than 10 quantity!<br /><a href="http://sanwebe.com/assets/paypal-shopping-cart-integration/">Back To Products</a>.</div>');
	// }
	

	
	$results = $mysqli->query("SELECT product_name,product_price,product_giamgia FROM product WHERE product_id='$product_id' LIMIT 1");
	$obj = $results->fetch_object();
	

	 $tienGiam=$obj->product_giamgia;
     $tiengoc=$obj->product_price;
     $tiencon=$tiengoc-($tiengoc*($tienGiam/100));
	if ($results) { 
		
		
		$new_product = array(array('name'=>$obj->product_name, 'code'=>$product_id, 'qty'=>$product_qty,'price'=>$tiencon));
		
		if(isset($_SESSION["products"])) 
		{
			$found = false; 
			
			foreach ($_SESSION["products"] as $cart_itm) 
			{
				if($cart_itm["code"] == $product_id){ 

					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty,'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) 
			{
				
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				
				$_SESSION["products"] = $product;
			}
			
		}else{
			
			$_SESSION["products"] = $new_product;
		}
		
	}
	
	
	header('Location:'.$return_url);
}


if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_id 	= $_GET["removep"]; 
	$return_url 	= base64_decode($_GET["return_url"]); 

	
	foreach ($_SESSION["products"] as $cart_itm) 
	{
		if($cart_itm["code"]!=$product_id){ 
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"],'price'=>$cart_itm["price"]);
		}
		
		
		$_SESSION["products"] = $product;
	}
	

	header('Location:'.$return_url);
}

?>