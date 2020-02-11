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
<div id="window">
    <p align="center" style="font-size:300%;">Problem Logged 	<span style="color: #007bff">&#10004;</span></p>
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
          echo "<tr>";
          echo "<td>" . "4" . "</td>";
          echo "<td>" . "Cant connect to printer" . "</td>";
          echo "<td>" . "Reinstall device driver" . "</td>";
          echo "<td>" . "11/11/19" . "</td>";
          echo "<td>" . "Update drivers in offices". "</td>";
          echo "</tr>";
      echo "</table>";
      ?>
      <br><br>
      <button type="button" class="btn btn-primary" id="live_page" onclick="location.href = 'allProblems.html'">Live Jobs</button> <!--Button to live jobs page-->
    </div>
</div>
</body>
</html>