<?php
$server = "sql107.infinityfree.com";
$username = "if0_36381012";
$password = "Su2tABDOK61";
$db_name = "if0_36381012_kitty";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$conn->autocommit(true);
?>