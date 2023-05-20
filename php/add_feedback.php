<?php
include_once '../php/config.php';

if(!$conn){
    die('Could not connect: '. mysqli_error($conn));
}
$sql="INSERT INTO feedback VALUES ('" . $_POST['uname'] . "', '" . $_POST['surname'] . "', '" . $_POST['email'] . "', '" . $_POST['feedback'] . "')";
if(!mysqli_query($conn, $sql))
{
    die('Error in posting values: '.mysqli_error($conn));
}
echo "feedback is stored in the table successfully";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Give your feedback here!</h3>
    <form action="add_feedback.php" method="POST">

       <h5>Your name:<br></h5>
        <input type="text" name="uname"><br>
        
        <h5>Your surname:<br></h5>
        <input type="text" name="usurname"><br>

        <h5>Your email:<br></h5>
        <input type="text" name="email"><br>

        <h5>Your feedback:<br></h5>
        <textarea name="feedback" rows="15" cols="50"></textarea><br><br>

        <input type="submit" value="Submit" href="">
        <input type="submit" value="Cancel">



    </form>
</body>
</html>