<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
	require 'connectiion.php';
  if (isset($_GET["idofclassToshowStudents"])){
		$idofclassToshowStudents = $_GET["idofclassToshowStudents"];
   $_SESSION['idofclassToshowStudents'] =  $_GET["idofclassToshowStudents"];

  }

  if (isset($_GET["idofclassToshowStudents"])){
		$idofclassToshowStudents = $_GET["idofclassToshowStudents"];
   $_SESSION['idofclassToshowStudents'] =  $_GET["idofclassToshowStudents"];

  }
  if (isset($_GET["idofclassToshowStudents"])){
    $idofclassToshowStudents = $_GET["idofclassToshowStudents"];
  $_SESSION['idofclassToshowStudents'] =  $_GET["idofclassToshowStudents"];
  
  }
?>
<div class="box">
<?php 
    $query = "SELECT Student_id FROM attendance  WHERE class_id=$_SESSION[idofclassToshowStudents] and AbsentOrPresent ='present' ";
    $query_run= mysqli_query($conn,$query);
    $row=mysqli_num_rows($query_run);
    
  
    $query = "SELECT Student_id FROM attendance  WHERE class_id=$_SESSION[idofclassToshowStudents] and AbsentOrPresent ='Absent' ";
    $query_run= mysqli_query($conn,$query);
      $row2=mysqli_num_rows($query_run);
      
  
    $dataPoints = array(
      array("label"=> "Present ", "y"=> $row),
      array("label"=> "Absent", "y"=> $row2),
      );
?>
</div>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>Students in Class</title>

    <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Attendance OF Student in Class "
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

	<p class="text-center fs-1 fw-b">List Of Students</p>

  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


	<?php
  require_once('connection.php');
?>
  

  <form class="row g-2 p-3" action="" method="post" autocomplete="off">
<div >
  <div class="col-md-2">
      <label for="" class="form-label">Permission For Attendance</label>
      <select class="form-select" aria-label="Default select example" name="semester" required value="">
        <option value="">Choose One</option>
  
        <option value="true">true</option>
        <option value="false">false</option>
      </select>
  </div>

    <div class="col-md-2">
      <label for="" class="form-label">Password</label>
      <input type="text"  name="password" class="form-control" placeholder="Password of Attendance"required value="" >
    </div>
  </div>
  
    <div class="col-12">
      <br>
      <button type="submit" name="submit" id="submit" class="btn btn-secondary">Submit</button>
    </div>


    <?php
    
  if(isset($_POST['submit'])){
  
   $semester=$_POST['semester'];
   $password=$_POST['password'];
  
   
  
       if( !empty($semester) ){
         
        $query = "UPDATE  classes SET CanORCanNotTakeAttendance='$semester' WHERE class_id=$_SESSION[idofclassToshowStudents]";
    $result = $conn->query($query);
    $query = "UPDATE  classes SET password='$password' WHERE class_id=$_SESSION[idofclassToshowStudents]";
    $result = $conn->query($query);
      
           
      }else echo '<h1>please select all data </h1>'; 
    }?>
    <?php
    $query = "SELECT  classes.password,classes.CanORCanNotTakeAttendance  ";
    $query .="    FROM classes ";
   $query .="WHERE class_id=$_SESSION[idofclassToshowStudents] ";
  
    $result = mysqli_query($link, $query);
    if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<table class="table table-hover">'; //border="4"
      echo '<tr><th>password</th><th>Attendance Option</th><tr>';
      while ($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>' . $row['password'] . '</td><td>' . $row['CanORCanNotTakeAttendance']. '</td>';
       
      }
      echo '</table>';
    }
    
  ?>
  <?php

$aid = $_SESSION['id'];
  $_GET["idofclassToshowStudents"] = $_SESSION["idofclassToshowStudents"];
 $query = "SELECT Student_id  ";
  $query .="    FROM classesofstudents ";
 $query .="INNER JOIN classes ON classesofstudents.class_id = classes.class_id WHERE classes.class_id= $_SESSION[idofclassToshowStudents] ";
$query_run= mysqli_query($link,$query);
  $row=mysqli_num_rows($query_run);
  echo'<h1> Number Of Students In This Class are: '.$row.'</h1>';


  $query = "SELECT  students.Student_id,students.Name,students.Last_Name,students.Email,students.Phone,students.major ";
  $query .="    from students ";
  $query .="INNER JOIN classesofstudents ON students.Student_id = classesofstudents.Student_id ";
 $query .="INNER JOIN classes ON classesofstudents.class_id = classes.class_id WHERE classes.class_id= $_SESSION[idofclassToshowStudents] ";
  //$query .="WHERE classes.class_id= '83' ";
  
 //classes.class_id
  $result = mysqli_query($link, $query);
  //$query = "SELECT * from students";
  //$result = mysqli_query($link, $query);

		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="table table-hover">'; //styled-table
			echo '<thead class="bg-dark"><tr style="color: white;"><th>#</th> <th style="color: white;">Name</th><th style="color: white;">Last Name</th><th style="color: white;">Major</th><th style="color: white;">Email</th><th style="color: white;">Phone Number</th><th style="color: white;">AVG </th><th style="color: white;">All Attendances</th></tr></thead>';
			while
             ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['Student_id'] . '</td><td>' . $row['Name'] . '</td><td>' . $row['Last_Name'] . '</td><td>' . $row['major']. '</td><td>' . $row['Email']. '</td><td>' . $row['Phone']. '</td><td>' . $row['Phone']. '</td>'
        .'<td><a href="showAttendance.php?idStdAttendance='.$row['Student_id'].'">	<button class="btn btn-light btn-outline-dark" type="button" id="submit">Show Attendance</button>';
				
        
			}
			echo '</table>';
		

		}else
    echo "<h1 >There is No Students </h1>"
		
	?>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="doctorPage.php"><button class="btn btn-dark btn-outline-info me-md-2" type="button">Home</button></a>
  </div>
  <a href="absent.php">	<button type="button" class="btn btn-dark btn-outline-info" id="submit">Take Attendance </button>
	
	</body>
</html>