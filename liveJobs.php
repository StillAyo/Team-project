<?php
$servername = "localhost";
$username = "root";
$password = "SIpnz0Sjel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'team018');


$sql = "SELECT * from live";

$res = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

// Fetch all
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
echo json_encode($result);