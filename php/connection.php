<?php
// Krijoni lidhjen me bazën e të dhënave
$host = "localhost";
$username = "root";
$password = "root";
$database = "UEBI2db";

$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>