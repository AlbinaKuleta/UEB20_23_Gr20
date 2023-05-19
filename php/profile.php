<?php
session_start();

// Include the configuration file and establish a database connection
include 'config.php';

// Get the logged-in user's name
if (isset($_SESSION['name'])) {
    $userName = $_SESSION['name'];

    // Fetch the user's data from the database
    $select = "SELECT * FROM user_form WHERE name = '$userName'";
    $result = mysqli_query($conn, $select);
    $userData = mysqli_fetch_assoc($result);
} else {
    // Redirect the user if not logged in
    header('Location: login_form.php');
    exit();
}

// Handle form submission for updating user details
if (isset($_POST['update'])) {
    $newPassword = md5($_POST['new_password']);
    $confirmPassword = md5($_POST['confirm_password']);

    if ($newPassword !== $confirmPassword) {
        $error = 'Passwords do not match!';
    } else {
        // Update the user's password in the database
        $update = "UPDATE user_form SET password = '$newPassword' WHERE name = '$userName'";
        mysqli_query($conn, $update);

        $success = 'Password updated successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/U2/UEB20_23_Gr20/css/style.css">
</head>
<body>
   
<div class="form-container">
   <h1>Welcome, <?php echo isset($userData['name']) ? $userData['name'] : 'User'; ?></h1><br>
   <h2>User Profile</h2>
   <?php
   if (isset($error)) {
       echo '<span class="error-msg">' . $error . '</span>';
   }
   if (isset($success)) {
       echo '<span class="success-msg">' . $success . '</span>';
   }
   ?>
   <form action="" method="post">
      <label>Name: </label>
      <input type="text" name="name" value="<?php echo isset($userData['name']) ? $userData['name'] : ''; ?>" disabled><br>
      <label>Email: </label>
      <input type="email" name="email" value="<?php echo isset($userData['email']) ? $userData['email'] : ''; ?>" disabled><br>
      <label>New Password: </label>
      <input type="password" name="new_password" required><br>
      <label>Confirm Password: </label>
      <input type="password" name="confirm_password" required><br>
      <input type="submit" name="update" value="Update" class="form-btn">
   </form>
</div>

</body>
</html>
