<?php
session_start();

if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $old_password = md5($_POST['old_password']);
   $new_password = md5($_POST['new_password']);
   $confirm_password = md5($_POST['confirm_password']);

   // Database connection
   $host = 'localhost';
   $dbname = 'uebi2db';
   $username = 'root';
   $password = 'root';

   try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $select = "SELECT * FROM user_form WHERE email = :email AND password = :old_password";
      $stmt = $conn->prepare($select);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':old_password', $old_password);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
         if ($new_password === $confirm_password) {
            $update = "UPDATE user_form SET password = :new_password WHERE email = :email";
            $stmt = $conn->prepare($update);
            $stmt->bindParam(':new_password', $new_password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $success = 'Password updated successfully!';
         } else {
            $error = 'New password and confirm password do not match!';
         }
      } else {
         $error = 'Incorrect email or old password!';
      }
   } catch (PDOException $e) {
      $error = 'Database error: ' . $e->getMessage();
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Change Password</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/U2/UEB20_23_Gr20/css/style.css">

</head>

<body>

   <div class="form-container">
      <h1>Change Password</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($error)) {
            echo '<span class="error-msg">' . $error . '</span>';
         } elseif (isset($success)) {
            echo '<span class="success-msg">' . $success . '</span>';
         }
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="old_password" required placeholder="enter your old password">
         <input type="password" name="new_password" required placeholder="enter your new password">
         <input type="password" name="confirm_password" required placeholder="confirm your new password">
         <input type="submit" name="submit" value="Change Password" class="form-btn">
      </form>
   </div>

</body>

</html>
