<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM customizesandwich";
$result = mysqli_query($conn,$query);
?>