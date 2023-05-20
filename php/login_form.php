<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = :email AND password = :pass";
   $stmt = $conn->prepare($select);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':pass', $pass);
   $stmt->execute();

   if($stmt->rowCount() > 0){
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:manager_page.php');
      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('location:client_form.php');
      }
   }else{
      $error[] = 'Incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/U2/UEB20_23_Gr20/css/style.css">

</head>
<body>

<div class="form-container">
   <h1>Welcome to Organica</h1>
   <form action="" method="post">
      <h3>Login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $errorMsg){
            echo '<span class="error-msg">'.$errorMsg.'</span>';
         }
      }
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
    
      


   </form>
</div>

</body>
</html>
