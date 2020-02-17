<?php
$servername = "localhost";
$username = "root";
$password = "SIpnz0Sjel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'team018');


$sql = "SELECT live.problem_no, type, personnel_id as CallerID, description, date FROM live INNER JOIN problem ON live.problem_no = problem.problem_no";

$res = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

// Fetch all
// $result = mysqli_fetch_all($res, MYSQLI_ASSOC);

$dataTables = array();
if (mysqli_num_rows($res) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($res)) {
		$dataTables["data"][] = $row;
	}
} 

 
echo json_encode($dataTables);
?>