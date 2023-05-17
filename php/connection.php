<?php
// Krijoni lidhjen me bazën e të dhënave
$host = "localhost";
$username = "db_user";
$password = "db_password";
$database = "db_name";

$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>