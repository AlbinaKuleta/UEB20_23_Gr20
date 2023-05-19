<!DOCTYPE html>
<html>
<head>
    <title>Grocery Management</title>
    <style>
        body {
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #d1f5d3;
            border-radius: 5px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"] {
            padding: 5px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Grocery Management</h1>

    <?php
    // Database configuration
    $host = 'localhost';
    $username = 'your_username';
    $password = 'your_password';
    $database = 'your_database';

    // Create a database connection
    $conn = mysqli_connect('localhost','root','diona2003','UEBI2db');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submissions and perform PHP logic here
        // You can include the code from the previous examples
    }
    ?>

    <!-- Save Form -->
    <h2>Save Grocery</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter name">

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" placeholder="Enter price">

        <input type="submit" value="Save">
    </form>

    <!-- Delete Form -->
    <h2>Delete Grocery</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="grocery_id">Grocery ID:</label>
        <input type="number" id="grocery_id" name="grocery_id" placeholder="Enter grocery ID">

        <input type="submit" value="Delete">
    </form>

    <!-- Modify Form -->
    <h2>Modify Grocery</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="grocery_id">Grocery ID:</label>
        <input type="number" id="grocery_id" name="grocery_id" placeholder="Enter grocery ID">

        <label for="new_name">New Name:</label>
        <input type="text" id="new_name" name="new_name" placeholder="Enter new name">

        <label for="new_price">New Price:</label>
        <input type="number" id="new_price" name="new_price" placeholder="Enter new price">

        <input type="submit" value="Modify">
    </form>

    <!-- Filter Form -->
    <h2>Filter Groceries</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="min_price">Minimum Price:</label>
        <input type="number" id="min_price" name="min_price" placeholder="Enter minimum price">

        <label for="max_price">Maximum Price:</label>
        <input type="number" id="max_price" name="max_price" placeholder="Enter maximum price">

        <input type="submit" value="Filter">
    </form>

    <?php
    // Close the database connection
   
    ?>
 </div>
</body>
</html>
