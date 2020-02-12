<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

textarea{
    font-family: Raleway;
    font-size: 17px;

}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

button {
  background-color: #00e1f1;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
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
                    
                    
                    $sql="select * from problem_type";
                    $res = mysqli_query($conn, $sql);
					// Fetch all
					/* $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
					print_r($result); */
					
					if (mysqli_num_rows($res) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($res)) {
							echo $row;
						}
					} else {
						echo "0 results";
					}
                   /*  while($row = $res->fetchRow()) {
                      echo "<option value=".$row[0].">" . $row[0] . "</option>"; 
                    } */
                    
                    ?>
<form id="regForm" action="assign_specialist.php" method="get">  
  <h1>Problem log:</h1>
  <div class="tab">
    <div align="center">
        <div style="display: inline-block; text-align: left;">
            <p>Type:</p>
            <p>
                <select name="type" style="width:200px">
                  
                </select>
            </p>
            <p><input placeholder="Serial Number.." oninput="this.className = ''" name="serial_no" style="width:200px"></p>
            <p><textarea name="description" rows="4" cols="50" placeholder="Description..."></textarea></p>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>
  </div>
</form>
</body>
</html>
