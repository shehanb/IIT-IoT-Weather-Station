<?php

$servername = "localhost";
$username = "xxxxxxxx";
$password = "xxxxxxxx";
$dbname = "xxxxxxxx";
$rows = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM dht11 ORDER BY id ASC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}
$conn->close();
//mysqli_close($conn);


?>
