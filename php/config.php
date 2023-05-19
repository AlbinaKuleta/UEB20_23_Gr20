<?php
// Krijoni lidhjen me bazën e të dhënave
$host = "localhost";
$username = "root";
$password = "diona2003";
$database = "projektiueb2";

$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>