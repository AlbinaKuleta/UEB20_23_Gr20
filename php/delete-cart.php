<?php
include_once '../php/config.php';
$pid = $_POST["pid"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
$new_cart = array();
foreach ($cart as $c)
{
    if ($c->pid != $pid)
    {
        array_push($new_cart, $c);
    }
}
 
setcookie("cart", json_encode($new_cart));
header("Location: index.php");
 
?>