
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="home.css">
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
<title>Previous Caller Problems</title>
<body>
     <!-- NAVBAR -->
  <nav class="navbar navbar-default navbar-dark bg-d">
        <a class="navbar-brand" href="finalhomepage.php">Make-It-All</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="finalhomepage.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logCall.html">Log Call <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="allProblems.html">Live Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reports.php">Analytics</a>
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
		//Database Connection
		
		$servername = "localhost";
		$username = "root";
		$password = "SIpnz0Sjel";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, 'team018');


		
		$id = $_GET["callersID"];
		$sql="SELECT * FROM problem WHERE personnel_id =$id";
		$res = mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
		$result = mysqli_fetch_all($res, MYSQLI_ASSOC);
		
		$sql2="SELECT name FROM personnel WHERE id ='".$id."'";
		$res2 = mysqli_query($conn, $sql2) or trigger_error("Query Failed! SQL: $sql2 - Error: ".mysqli_error($conn), E_USER_ERROR);
		$result2 = mysqli_fetch_row($res2);
	?>
<div id="window">
    <p align="center" style="font-size:300%;text-transform:capitalize;"> <?php echo $result2[0] ?> </p>
    <div align="center">
    <p>ID Number: <?php echo $id ?></p>
    <p>Problems:</p>
        <?php
        echo '<style>';
        echo 'table { border-collapse: collapse;}';
        echo '</style>';
        echo '<table cellpadding="10", border="1">';
        echo "<tr>
        <th>Problem Number</th>
        <th>Type</th>
        <th>Date</th>
        <th>Problem Description</th>
        </tr>";

		
		foreach($result as $x){
				echo "<tr>";
				echo "<td>" . $x['problem_no'] . "</td>";
				echo "<td>" . $x['type'] . "</td>";
				echo "<td>" . $x['date'] . "</td>";
				echo "<td>" . $x['description'] . "</td>";
				echo "</tr>";
		}
		
		echo "</table>";

        
        ?>
        <br>
    </div>
</div>
<div style="text-align:center;">
            <button type="button" class="btn btn-primary" onclick="location.href = 'resolvedForm.html'">Resolve Problem</button>
          </div>

</body>
</html>