<?php
$conn = mysqli_connect("localhost:8012", "root", "root", "UEBI2db") or die("Connection failed:".mysqli_connect_error());
 
$quantity = $_POST["quantity"];
$productCode = $_POST["productCode"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
$result = mysqli_query($conn, "SELECT * FROM products WHERE productCode = '" . $productCode . "'");
$product = mysqli_fetch_object($result);
 
array_push($cart, array(
    "productCode" => $productCode,
    "quantity" => $quantity,
    "product" => $product
));
 
setcookie("cart", json_encode($cart));
header("Location: index.php");
 
?>




