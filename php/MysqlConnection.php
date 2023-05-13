<?php 
$connection = mysqli_connect("localhost", "root", "diona2003", "UEBI2db");
if(!$connection)
    die("could not connect" . mysqli_connect_error());
else
    echo 'connection established ';



?>
