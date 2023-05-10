<?php
include 'config.php';
include 'cart.php';

if(!$conn){
    die('Could not connect: '. mysqli_error($conn));
  }else{
    $upid = $uid = $pid = $quantity = $unit = "";

    if(isset($_POST['submit'])){
        $upid = $_POST['upid'];
        $uid = $_POST['uid'];
        $pid = $_POST['pid'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['unit'];

    $sql = "INSERT INTO userproduct (upid, uid, pname, quantity, unit)
    VALUES ('$upid', '$uid', '$pname', '$quantity', '$unit')";
    
    if(mysqli_query($conn, $sql)){
        header("Location: cart.php?msg = New product has been added to cart");
         exit();
      }else{
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }


setcookie("cart", json_encode($cart));
header("Location: cart.php");
 
?>
