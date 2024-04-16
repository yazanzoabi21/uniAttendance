<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
	require_once('connection.php');
	if (isset($_GET["idStdAttendance"])){
		$idofclassToshowStudents = $_GET["idStdAttendance"];
   $_SESSION['idStdAttendance'] =  $_GET["idStdAttendance"];

	}
  if (isset($_GET["idofclassToshowStudents"])){
	$idofclassToshowStudents = $_GET["idofclassToshowStudents"];
	$_SESSION['idofclassToshowStudents'] =  $_GET["idofclassToshowStudents"];

	}

	$query = "SELECT Student_id FROM attendance  WHERE Student_id= $_SESSION[idStdAttendance] and class_id=$_SESSION[idofclassToshowStudents] and AbsentOrPresent ='present' ";
  $query_run= mysqli_query($link,$query);
	$row=mysqli_num_rows($query_run);
	//echo'<h1> Number Of present '.$row.'</h1>';

	$query = "SELECT Student_id FROM attendance  WHERE Student_id= $_SESSION[idStdAttendance] and class_id=$_SESSION[idofclassToshowStudents] and AbsentOrPresent ='Absent' ";
	$query_run= mysqli_query($link,$query);
	  $row2=mysqli_num_rows($query_run);
	 // echo'<h1> Number Of Absent is '.$row2.'</h1>';

	$dataPoints = array(
		array("label"=> "Present ", "y"=> $row),
		array("label"=> "Absent", "y"=> $row2),
		
		
	  );
 
?>
    

<!doctype html>
	<html lang="en">
	<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
		<title>Show Attendance</title>

		<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Attendance Of Student in Class "
	},
	subtitles: [{
		text: " Attendance Students"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "# ,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

	</head>
	
	<body>


  <!--<div class="topnav">
    <a class="active" href="Classesofinstructor.php">Classes</a>
    <a href="addStudentbyinstructor.php">Register </a>

  
  <a href="changepassword.php">change password</a>

  <a href="login.html">LogOut</a>

</div>-->

	<p class="text-center fs-1">Absentee List</p>
	<?php
	//select count(id) from classesofstudents WHERE Student_id=

  require_once('connection.php');?>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


<br>

<?php
	

  require_once('connection.php');
  $aid = $_SESSION['id'];


  $query = "SELECT * from attendance WHERE Student_id= $_SESSION[idStdAttendance] and class_id=$_SESSION[idofclassToshowStudents]";
  $result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      		echo '<div  class ="form" id="form">';

			echo '<table class="table table-hover">';
			echo '<thead class="bg-dark"><tr ><th style="color: white;">#</th> <th style="color: white;">Date</th><th style="color: white;">A/P</th><th style="color: white;">Course</th><th style="color: white;">AVG</th></tr></thead>';
			while
             ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['id'] . '</td><td>' . $row['Date'] . '</td><td>' . $row['AbsentOrPresent']. '</td><td>' . $row['class_id'] . '</td><td>' . $row['AVG']. '</td>' ;
				
        
			}
			echo '</table>';
		

		}else
    echo "<h1 >There is No Students </h1>"
		
	?>

	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    	<a href="studentsClass.php"><button class="btn btn-dark btn-outline-info me-md-2" type="button">Home</button></a>
  	</div>
  
	</body>
</html>