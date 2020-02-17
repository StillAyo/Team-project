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
<title>Problem Resolution</title>
<body>

<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "SIpnz0Sjel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'team018');

//getter for problem number id for problem being resolved
$problemNumber = $_GET["problemNumber"];

?> 
   <!-- NAVBAR -->
   <nav class="navbar navbar-default navbar-dark bg-d">
        <a class="navbar-brand" href="#">Make-It-All</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="finalhomepage.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logCall.html">Log Call</a>
            </li>
            <li class="nav-item active">
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

<div id="window">
    <p align="center" style="font-size:300%;">Problem Solved<span style="color: #007bff">&#10004;</span></p>
    <p align="center">
    <?php  
    //selecting the row in the problem table of the problem being resolved
    $sql= "SELECT * FROM problem WHERE problem_no='".$_GET["problemNumber"]."'";
	$res = mysqli_query($conn, $sql);

   
    //Deleting the problem from the problem table in the database
    $sql2= "DELETE FROM problem WHERE problem_no='".$problemNumber."'";
	$sql3=  "DELETE FROM live WHERE problem_no='".$problemNumber."'";
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql) {
		echo "";
	} else {
		echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
	}
    //Inserting the resolved problem into the resovled table
    $sql3= "INSERT INTO resolved (problem_no, solution, date, notes, specialist_id) VALUES ('".$_GET["problemNumber"]."', '".$_GET["solution"]."', '".$_GET["date"]."', '".$_GET["notes"]."', '".$_GET["specialist"]."')";
    if (mysqli_query($conn, $sql3)) {
		echo "";
	} else {
		echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
	}

    //Table showing the problem that was resolved
    echo '<style>';
    echo 'table { border-collapse: collapse;}';
    echo '</style>';
    echo '<table cellpadding="10", border="1">';
    echo '<thead>';
    echo '<tr>';
        echo '<th>'."Problem Number".'</th>';
        echo '<th>'."Type".'</th>';
        echo '<th>'."Personnel ID".'</th>';
        echo '<th>'."Solution".'</th>';
        echo '</tr>';
    echo '</thead>';
	if (mysqli_num_rows($res) > 0) {
// output data of each row
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[4] . "</td>";
            echo "<td>" . $_GET["solution"] . "</td>";
            echo "</tr>";
		}
	} 
    echo '</table>' ;
    ?>
    </div>
</div>
</body>
</html>