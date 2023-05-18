<?php 
$connection = mysqli_connect("localhost", "root", "root", "UEBI2db");
if(!$connection)
    die("could not connect" . mysqli_connect_error());
else
    echo 'connection established ';



?>
