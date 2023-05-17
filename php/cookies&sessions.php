<?php
include("connection.php");
if(isset($_POST['id']) && !empty($_POST['id'])){
    $d = 0;
    if(!empty($_COOKIE['item']) && is_array($_COOKIE['item'])) {
        foreach($_COOKIE['item'] as $name => $value){
            $d = $d + 1;
        }
        $d = $d + 1;
    }else{
        $d = $d + 1;
    }
    $q = "SELECT* FROM products WHERE id = ".$_POST['id']."";
$res = $db -> query($q);
if($res -> num_rows > 0){
    while($row = $res -> fetch_assoc()){
        $id = $row['id'];
        $name = $row['name'];
        $qty = $row['qty'];
        $price = $row['price'];
        $image = $row['image'];
        $Tex = $row['Tex'];
        $gst = $price * $Tex / 100;
        $price1 = $qty * $price;
        $total = $gst + $price1;

    }
    if (!empty($_COOKIE['item']) && is_array($_COOKIE['item'])) {
      foreach($_COOKIE['item'] as $name1 => $value) {
        $value11 = explode("__", $value);
        $found = 0;
        if($image == $value11[0]) {
            $found = $found + 1;
            $qty1=$value11[3] + 1;
            $price1 = $value11[8] * $qty1;
            $Tex1 = $value11[6];
            $gst1 = $price1 * $Tex1 / 100;
            $total= $gst1 + $price1;

            setcookie("item[$name1]", $image. "__".$name."__".$price1."__".$qty1."__".$total.
            "__".$id."__".$Tex1."__".$gst1."__".$proce, time() + 1800);

        }
    } 
    if($found == 0) {
        setcookie("item[$d]", $image."__".$name."__".$price1."__".$qty."__".$total."__".$id.
        "__".$Tex."__".$gst."__".$price,time() + 1800);
    } 
    }
    else{
        setcookie("item[$d", $image."__".$name."__".$price1."__".$qty."__".$total."__".$id.
        "__".$Tex."__".$gst."__".$price,time() + 1800);
    }
}
header("Refresh: 0; url='http://localhost/shop-index.php'");
}
?>

