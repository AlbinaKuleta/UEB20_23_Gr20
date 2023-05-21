<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header("location: login_form.php");
    exit;
}

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Validate login credentials
    // Replace with your actual login validation code
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    
    // Check the login credentials against your database or any other authentication mechanism
    // ...
    // If login is successful, set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect to profile page
    header("location: profile.php");
    exit;
}

// Process registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // Validate and process registration data
    // Replace with your actual registration code
    $username = $_POST['register_username'];
    $password = $_POST['register_password'];
    
    // Save the registration data to your database or any other storage mechanism
    // ...
    // If registration is successful, set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect to profile page
    header("location: profile.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>

    <h2>Profile Information</h2>
    <!-- Display user profile information here -->
    <!-- ... -->

    <h2>Login Form</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login_username">Username:</label>
        <input type="text" id="login_username" name="login_username" required><br>

        <label for="login_password">Password:</label>
        <input type="password" id="login_password" name="login_password" required><br>

        <input type="submit" name="login" value="Login">
    </form>

    <h2>Registration Form</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="register_username">Username:</label>
        <input type="text" id="register_username" name="register_username" required><br>

        <label for="register_password">Password:</label>
        <input type="password" id="register_password" name="register_password" required><br>

        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
