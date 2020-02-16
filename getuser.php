<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$servername = "localhost";
$username = "root";
$password = "SIpnz0Sjel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'team018');

$sql="SELECT * FROM personnel WHERE name LIKE '%".$q."%'";
$res = mysqli_query($conn, $sql);


echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Job Title</th>
<th>Department</th>
<th>Telephone Number</th>
</tr>";
if (mysqli_num_rows($res) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($res)) {
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['job'] . "</td>";
		echo "<td>" . $row['dept'] . "</td>";
		echo "<td>" . $row['telno'] . "</td>";
		echo "</tr>";
	}
} 
echo "</table>";
?>
</body>
</html>