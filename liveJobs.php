<?php
$servername = "localhost";
$username = "root";
$password = "SIpnz0Sjel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'team018');


$sql = "SELECT live.problem_no, type, personnel_id as CallerID, date FROM live INNER JOIN problem ON live.problem_no = problem.problem_no";

$res = mysqli_query($conn, $sql);
// Fetch all
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
die(mysqli_error($db)
 
echo json_encode($result);