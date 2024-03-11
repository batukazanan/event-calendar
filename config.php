<?php 

$servername = "localhost";
$username = "batu";
$password = "batu";
$database = "calendar";

$conn = new mysqli($servername, $username, $password, $database);

if($conn -> connect_error) {
    die("connection error ". $conn->connect_error);
}

?>