<?php
session_start();
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="home.css">
<title>Problem Form</title>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#window {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

</style>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-dark bg-d">
    <a class="navbar-brand" href="#">Make-It-All</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="logCall.html">Log Call</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="allProblems.html">Live Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reports.html">Analytics</a>
        </li>
      </ul>
      <ul>
        <ul class="nav navbar-nav" style="float: right">
          <button class="btn btn btn-danger" type="button" onclick="location.href = 'index.html'">Sign Out</button>
        </ul>
      </ul>
    </div>
  </nav>
<!-- END NAVBAR -->
<?php
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
			echo "Connected successfully";
	}
	
	//----------FUNCTION TO RETURN APPROPRIATE SPECIALIST--------------//
	//Insert Into LIVE
	$problem_no = $_SESSION["Problem_no"];
	$array = $_SESSION["problem_details"];
	
	$fields_values = array($problem_no, '123');
	
	//----------------CHANGE '123' TO SPECIALIST ID-------------------------//
	$sql = "INSERT INTO live (problem_no, specialist_id) VALUES ($fields_values[0], $fields_values[1])"; //Sql prepare statement
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	sql2="SELECT live.specialist_id, personnel.name, COUNT(live.problem_no) FROM live INNER JOIN personnel ON personnel.id = live.specialist_id GROUP BY live.specialist_id ORDER BY 3 ASC";
	$res2 = mysqli_query($conn, $sql2);
	$array2 = array();
	if (mysqli_num_rows($res2) > 0) {
			// output data of each row
		while($row2 = mysqli_fetch_row($res2)) {
			array_push($array2, $row2[0]);
		}
	}
	else{
			echo "no results";

		}
	print_r($array2);
	$sql3="SELECT live.specialist_id, personnel.name, COUNT(live.problem_no) FROM live INNER JOIN personnel ON personnel.id = live.specialist_id GROUP BY live.specialist_id ORDER BY 3 ASC";

?>
<div id="window">
    <p align="center" style="font-size:300%;">Assign Specialist</p>
    <div align="center">
    <p>Suggestions to change:</p>
       
        <br>
        <p>Choose Specialist:</p>
		
        <br><br>
        <button type="button" class="btn btn-primary" onclick="location.href = 'allProblems.html'">Live Jobs</button>
    </div>
</div>
</body>
</html>

