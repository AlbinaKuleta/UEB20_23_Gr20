<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="client_page.php">Home</a>
         <a href="client_products.php">Products</a>
  
         <a href="client_contacts.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['client_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['client_email']; ?></span></p>
         <a href="logout_form.php" class="delete-btn">Logout</a>
         <div>new <a href="login_form.php">Login</a> | <a href="register_form.php">Register</a></div>
      </div>

   </div>

</header>
