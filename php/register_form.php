<?php

include 'config.php';

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $cemail = $_POST['cemail'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = :email AND password = :pass";
   $stmt = $conn->prepare($select);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':pass', $pass);
   $stmt->execute();

   if($stmt->rowCount() > 0){
      $error[] = 'User already exists!';
   }else{
      if($pass != $cpass){
         $error[] = 'Passwords do not match!';
      }else{
         $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES (:name, :email, :pass, :user_type)";
         $stmt = $conn->prepare($insert);
         $stmt->bindParam(':name', $name);
         $stmt->bindParam(':email', $email);
         $stmt->bindParam(':pass', $pass);
         $stmt->bindParam(':user_type', $user_type);
         $stmt->execute();
         header('location: login_form.php');
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/U2/UEB20_23_Gr20/css/style.css">

</head>
<body>

<div class="form-container">
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $errorMsg){
            echo '<span class="error-msg">'.$errorMsg.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="email" name="cemail" required placeholder="confirm your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">Client</option>
         <option value="admin">Manager</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>
</div>

</body>
</html>
