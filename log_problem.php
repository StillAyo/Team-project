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
<title>Log Call</title>
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
    <a class="navbar-brand" href="finalhomepage.html">Make-It-All</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="finalhomepage.html">Home <span class="sr-only">(current)</span></a>
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

	
	
	$caller_id = intval($_SESSION["caller_id"]);
	$date = $_SESSION["date"];
	$fields_values = array($_GET["type"] , intval($_GET["serial_no"]) , $_GET["description"], $caller_id, $date);  //Inputs from form
	print_r($fields_values);
	$_SESSION["problem_details"] = $fields_values;
	
	
	// Insert New Problem into problem table
	$sql = "INSERT INTO problem (type, serial_no, description, personnel_id, date) VALUES ($fields_values[0],$fields_values[1],
			$fields_values[2],$fields_values[3], $fields_values[4])";
	
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	//Get problem number for later use
	$sql2="SELECT problem_no FROM problem ORDER BY problem_no DESC LIMIT 1";
	$res = mysqli_query($conn, $sql2);
	$result = mysqli_fetch_row($res);
	$_SESSION["Problem_no"] = $result[0];
	echo $result[0];
?>
<div id="window">
    <p align="center" style="font-size:300%;">Problem Number <?php echo $_SESSION["Problem_no"]; ?> Logged<span style="color: #007bff">&#10004;</span></p>
    <p align="center">Recent Solutions:</p>
    <div align="center">
      <?php
      echo '<style>';
      echo 'table { border-collapse: collapse;}';
      echo '</style>';
      echo '<table cellpadding="10", border="1">';
      echo "<tr>
      <th>Problem No</th>
      <th>Description</th>
      <th>Solution</th>
      <th>Dates</th>
      <th>Notes</th>
      </tr>";
	  $x = 0;
		if (mysqli_num_rows($res) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($res)) {
				echo "<option value=".$row['type'].">" . $row['type'] . "</option>";
				echo "<tr>";
			  echo "<td>" . $row[0] . "</td>";
			  echo "<td>" . $row[1] . "</td>";
			  echo "<td>" . $row[2] . "</td>";
			  echo "<td>" . $row[3] . "</td>";
			  echo "<td>" . $row[4] . "</td>";
			  echo "</tr>";
			  $x++;
			}
		} 
          
		else {
			echo "<tr>";
			echo "<td>" . "0 results" . "</td>";
			echo "</tr>";
		}
      echo "</table>";
      ?>
      <br><br>
		<button type="button" class="btn btn-primary" id="assign_page" onclick="location.href = 'assign_specialist.php'">Assign Specialist</button>
    </div>
</div>
</body>
</html>