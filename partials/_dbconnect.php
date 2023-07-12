<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "user";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
