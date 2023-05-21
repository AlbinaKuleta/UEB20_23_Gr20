<?php
include_once '../php/config.php';

$quantity = $_POST["quantity"];
$pid = $_POST["pid"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
$result = mysqli_query($conn, "SELECT * FROM products WHERE pid = '" . $pid . "';");
$product = mysqli_fetch_object($result);
 
array_push($cart, array(
    "pid" => $pid,
    "pname" => $pname,
    "price" => $price,
    "image" => $image,
    "cid" => $cid,
    "quantity" => $quantity,
));
setcookie("cart", json_encode($cart));
header("Location: index.php");
 
?>




