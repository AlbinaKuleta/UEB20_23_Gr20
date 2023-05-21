<?php
 include_once '../php/config.php';

$pid = $_POST["pid"];
$quantity = $_POST["quantity"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
foreach ($cart as $c)
{
    if ($c->pid == $pid)
    {
        $c->quantity = $quantity;
    }
}
 
setcookie("cart", json_encode($cart));
header("Location: cart.php");
