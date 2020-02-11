<?php
// Start the session
session_start();
?>
<html>
 <head><title>Make-It-All</title></head>
 <body bgcolor="ffffff" text="000000">
<?php
	require_once "random_compat/lib/random.php";
	/* $servername = "localhost";
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
	} */
	
	function checkUser($user_id){
		$servername = "localhost";
		$username = "root";
		$password = "SIpnz0Sjel";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, 'team018');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else{
			echo 'connected2';
		}

		$query="SELECT * FROM personnel";
		$res = mysqli_query($conn, $sql);
		$result = mysqli_fetch_all($res, MYSQLI_ASSOC));
		echo $result;
				
		
		
		
	}
	/* function hashPassword($plaintext_password){
		$hashed_password = hash("sha256", $plaintext_password);
		return $hashed_password;
	}
	
	function generateSalt(){
		$salt = bin2hex(random_bytes(32));
		return $salt;
	}
	
	function retrievePassword($user_id){
		$host='localhost';
		$dbName='team018';
		$username = 'team018';
		$password = 'SIpnz0Sjel';
		$dsn = "mysql://$username:$password@$host/$dbName"; 
		$query="SELECT salt, password_hash FROM personnel WHERE id = $user_id";	
		$db =& MDB2::connect($dsn); 
		$db->setFetchMode(MDB2_FETCHMODE_ASSOC);		
		$res =& $db->query($query);
		if ($db->isError($res)) {
			die("Error in query: " . MDB2::errorMessage($res) . ". Query was: $query");
		}		
		$result = $res ->fetchAll();
		
		
		$stored_salt_and_hash = array($result[0]['salt'],$result[0]['password_hash']);
		
		return $stored_salt_and_hash;
	}
	
	function compareHashes($stored_salt, $stored_hash, $password){
		$hash_to_compare = hashPassword($password);
		if ($stored_salt.$stored_hash == $stored_salt.$hash_to_compare){
			return true;
		}
		else{
			return false;
		}
	} */
	$user_id = $_REQUEST['userID'];
	$password = $_REQUEST['password'];
	
	
	$id_array = array("11111", "1234", "22222", "33333", "34544", "5678", "9011", "9453");
	
	
	
	
	/*		
	foreach($id_array as $id){
		$hashedPassword = hashPassword("testing");
		$salt = generateSalt();
		$secure_password = $salt.$hashedPassword;
		$values = array($secure_password, $id);
		
		$query = "UPDATE personnel SET password = '$secure_password', salt = '$salt' WHERE id = '$id' ";
		$result = $db->query($query);
		if ($db->isError($result)) {
			die("Error in query: " . MDB2::errorMessage($result) . ". Query was: $query");
		}

		// get number of affected rows
		
	} 
	*/
	$current_user = checkUser($user_id);
	/*
	if (checkUser($user_id)){
		$stored_credentials = retrievePassword($user_id);
		if(compareHashes($stored_credentials[0], $stored_credentials[1], $password)){
			/* test
			
			echo "ID string:  {$_REQUEST['userID']} <br /> ";
			echo "password entered:   {$_REQUEST['password']} <br />";
			$stored_password = retrievePassword($user_id);
			echo "password saved:"; print_r($stored_password); echo "<br/>";
			echo "query string:     {$_SERVER['QUERY_STRING']} <br />"; // method=post does not show  
			echo "Action URL:       {$_SERVER['PHP_SELF']} <br />"; 
			
			
			$_SESSION["site_id"] = $current_user;
			include 'finalhomepage.html';
		}
		else{
			echo "NOT CORRECT";
		}
	}
	else{
		echo "incorrect privileges";
	}
	*/
?>


</body>
</html> 