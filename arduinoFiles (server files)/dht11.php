<?php
//connect to mysql
include("dbconnect.php");

$sql = "INSERT INTO dht11 (humidity, temperature)
VALUES ('".$_GET[humidity]."', '".$_GET[temperature]."')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>