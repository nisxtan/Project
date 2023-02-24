<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "users_list";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS users_list";
mysqli_query($conn, $sql);

mysqli_close($conn);


$conn = mysqli_connect($servername, $username, $password, $database);
$table = "CREATE TABLE IF NOT EXISTS users_project(
    id INT(5) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    email VARCHAR(255),
    passwo VARCHAR(255)
)";

mysqli_query($conn, $table);

?>