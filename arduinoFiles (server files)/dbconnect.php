<?php
$username = "xxxxxxx"; //username for database
$password = "xxxxxxx"; //password for database
$hostname = "localhost";
$dbName = "xxxxxxx";

$conn = mysqli_connect($hostname,$username,$password,$dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$selected = mysqli_select_db($conn, "xxxxxxx");
?>