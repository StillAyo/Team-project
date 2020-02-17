
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
<body style="background-image:url('https://images.unsplash.com/photo-1470790376778-a9fbc86d70e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=649&q=80')">

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
	<p style="text-align:center;"><img src="https://pbs.twimg.com/profile_images/925645911539290112/1oDFxNO8_400x400.jpg" width="225" height="175" alt="Logo"></p>
	</div>
  <br>
  <div style="padding-left:35%">
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
        <div class="card" style="width: 50%; margin:auto">
        <div class="card-body">
          <h5 class="font-weight-bold mb-3" style="color:white; text-align:center;">Current queries</h5>
        </div>
        <div class="card-body">
        <div style="background-color:#ffffff;"><?php
            //Database Connection
            require_once 'MDB2.php';
            include "database-credentials.php";
            $host='localhost';
            $dbName='team018';
            $dsn = "mysql://$username:$password@$host/$dbName";
            
            $mdb2 =& MDB2::connect($dsn); 
            if(PEAR::isError($mdb2)){ 
                die($mdb2->getMessage());
            }

            $sql = "SELECT * FROM problem ORDER BY problem_no LIMIT 3";
            $res =& $mdb2->query($sql);
            if(PEAR::isError($res)){ 
                die($res->getMessage());
            }
            echo '<style>';
            echo 'table { border-collapse: collapse;}';
            echo '</style>';
            echo '<table cellpadding="10", border="1">';
            echo '<thead>';
            echo '<tr>';
                echo '<th>'."Problem Number".'</th>';
                echo '<th>'."Type".'</th>';
                echo '<th>'."Description".'</th>';
                echo '<th>'."Personnel ID".'</th>';
                echo '</tr>';
            echo '</thead>';
                while($row = $res->fetchRow()) {
                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>";
                    echo "<td>" . $row[1] . "</td>";
                    echo "<td>" . $row[3] . "</td>";
                    echo "<td>" . $row[4] . "</td>";
                    echo "</tr>";
                }
            echo '</table>' ;
          ?></div>
          <a href="allProblems.html" style="text-align:center;" class="card-link">View full list</a>
        </div>
      </div>
      </div>
    </div>

  </div>

</body>
</html>
