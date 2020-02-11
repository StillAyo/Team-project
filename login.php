<?php
// Start the session
session_start();
?>
<html>
 <head><title>Make-It-All</title></head>
 <body bgcolor="ffffff" text="000000">
<?php
	require_once "random_compat/lib/random.php";
	$servername = "localhost";
	$username = "root";
	$password = "SIpnz0Sjel";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, 'team018');

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	else {
		echo "connected";
	}
	
	
?>


</body>
</html> 