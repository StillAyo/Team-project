
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Reports
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"	crossorigin="anonymous">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/dashboard.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="home.css">

  <!--Load the API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		$( document ).ready(function() {
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
				
				$sql = "SELECT type, COUNT(type) as amount FROM live JOIN problem USING (problem_no) GROUP BY type";
				$res = mysqli_query($conn, $sql);
				$result = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
				
				$current_year = date("Y")-1;
				$sql_2 = "SELECT count(problem_no) from resolved WHERE date BETWEEN '$current_year-01-01' and '$current_year-12-31'";
				$res = mysqli_query($conn, $sql_2);
				$result_2 = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
				
				$sql_3 = "SELECT count(problem_no) from live";
				$res = mysqli_query($conn, $sql_3);
				$result_3 = json_encode(mysqli_fetch_all($res, MYSQLI_NUM));
				
				$sql_4 = "SELECT name, COUNT(problem_no) FROM live INNER JOIN personnel ON live.specialist_id = personnel.id GROUP BY name";
				$res = mysqli_query($conn, $sql_4);
				$result_4 = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
				
				
			?>
			var temp = JSON.parse('<?php echo $result?>');
			var pie_chart_data = [];
			var headings = ['Problem type', 'Amount'];
			for (x in temp){
				pie_chart_data.push([temp[x]['type'], parseInt(temp[x]['amount'])]);
			}
			pie_chart_data.splice(0,0,headings);
			
			var total_resolved_queries = JSON.parse('<?php echo $result_2?>');
			console.log(total_resolved_queries);
			
			function drawPieChart() {
			
			var data = google.visualization.arrayToDataTable(pie_chart_data);

			var options = {
			  title: '',
			  is3D: true,
			  'width':400,
			  'height':300
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		  }
	});	
    </script>
</head>

<body>
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
        <li class="nav-item">
          <a class="nav-link" href="allProblems.html">Live Jobs</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Analytics</a>
        </li>
        
      </ul>
      <ul>
        <ul class="nav navbar-nav" style="float: right">
          <button class="btn btn btn-danger" type="button" onclick="location.href = 'index.html'">Sign Out</button>
        </ul>
      </ul>
    </div>
  </nav>
	
	
      <div class="main-panel" >

      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total queries</p>
                      <p class="card-title" id="total-queries">150<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Resolved queries</p>
                      <p class="card-title" id="resolved-queries">130
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Past year
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">In progress</p>
                      <p class="card-title" id="in-progress-queries">10<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> Latest
                </div>
              </div>
            </div>
          </div>


          <div class="row row-charts">
            <div class="col-md-16">
              <div class="card card-stats">
                <div class="card-header">
                  <h6>Problems grouped by type</h6>
                  <hr>
                </div>
                <div class="card-body">
                  <div id="chart_div"></div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-stats">
                <div class="card-header">
                  <h6>Completed queries</h6>
                  <hr>
                </div>
                <div class="card-body">
                  <div id="line_chart"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row row-charts">
              <div class="col">
                <div class="card card-stats">
                  <div class="card-header">
                    <h6> Job per specialist </h6>
                  </div>
                  <div class="card-body">
                    <div id="bar_chart"></div>
                  </div>
                </div>
              </div>
          </div>



    </div>
  </div>



</body>

</html>
