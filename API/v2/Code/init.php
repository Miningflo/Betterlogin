<?php

require("./connect.php");
$conn = connect("");

$sql = "CREATE DATABASE users";
$conn->query($sql);

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(256) NOT NULL,
dob DATE NOT NULL,
reg_date TIMESTAMP
)";
$conn = connect("users");
$conn->query($sql);
?>
