<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="home.css">

</head>
<body style="background-image:url('https://www.thebalancecareers.com/thmb/gRT3S9WVI4HEFF4NNyx2KymWtBw=/2000x1335/filters:fill(auto,1)/call_center-549596335-589a79fd3df78caebcbf2e5f.jpg')">
<!-- NAVBAR -->
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Make-It-All</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
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



  <div style="margin-top: 4%;">
	<p style="text-align:center;"><img src="logo.png" width="500" height="175" alt="Logo"></p>
	</div>
  <br>
  <div style="padding-left:32.5%">
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'logCall.html'">Log Call</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'allProblems.html'">Live Jobs</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'reports.html'">Analytics</button>
      </div>
      <div class="col">
      </div>
      <div class="col">
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <div class=login-container>
        <div style="width: 50%; margin:auto; background-color: #5f0071">
			<div class="card-body">
			  <h5 class="font-weight-bold mb-3" style="color:white; text-align:center;">Current Queries</h5>
			</div>
			<ul class="list-group list-group-flush">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "SIpnz0Sjel";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, 'team018');
				
				$sql = "SELECT * FROM problem ORDER BY problem_no LIMIT 3";
				$res = mysqli_query($conn, $sql);
				
				echo '<style>';
				echo 'table { border-collapse: collapse;}';
				echo '</style>';
				echo '<table cellpadding="0", border="0">';
				echo '<thead>';
				echo '<tr>';
				echo '<th>'."Problem Number".'</th>';
				echo '<th>'."Type".'</th>';
				echo '<th>'."Description".'</th>';
				echo '<th>'."Personnel ID".'</th>';
				echo '</tr>';
				if (mysqli_num_rows($res) > 0) {
			// output data of each row
					while($row = mysqli_fetch_assoc($res)) {
						print_r($row);
						echo "<tr>";
							echo "<td><li class='list-group-item', background-color:#5f0071>".$row['problem_no']."</li></td>";
							echo "<td><li class='list-group-item', background-color:#5f0071>".$row['type']."</li></td>";
							echo "<td><li class='list-group-item', background-color:#5f0071>".$row['description']."</li></td>";
							echo "<td><li class='list-group-item', background-color:#5f0071>".$row['personnel_id']."</li></td>";
						echo "</tr>";
					}
				} 
			?>
			</ul> 
			</table>
        <div class="card-body">
          <a href="allProblems.html" style="text-align:center;" class="card-link">View full list</a>
        </div>
      </div>
      </div>
    </div>

  </div>

</body>
</html>