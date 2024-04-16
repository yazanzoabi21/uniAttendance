
<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
	require 'connectiion.php';
  $dataPoints = array( 
    array("y" => 3373.64, "label" => "" ),
    array("y" => 2435.94, "label" => "" ),
    array("y" => 1842.55, "label" => "" ),
    array("y" => 1828.55, "label" => "" ),
    array("y" => 1039.99, "label" => "" ),
    array("y" => 765.215, "label" => "" ),
    array("y" => 612.453, "label" => "" )
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="InstructorPage.css">

    <title>Class Of Instructor</title>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Student Attendance"
	},
	axisY: {
		title: "Students Attendance"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## ",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>
    
  </head>
  <body>


<ul class="nav nav-tabs justify-content-center bg-success">
  <li class="nav-item">
    <a class="nav-link active" style="color: black; font-weight: bold;" aria-current="page" href="doctorPage.php">Classes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: white; font-weight: bold;" aria-current="page" href="addStudentbyinstructor.php">Register</a>
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" style="color: white; font-weight: bold;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">More</a>
    <ul class="dropdown-menu bg-success" style="color: white;">
      <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
      <li><a class="dropdown-item" href="login.html">Logout</a></li>
    </ul>
  </li>
</ul>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style="color: black; font-weight: bold;" aria-current="page" href="Classesofinstructor.php">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color: black; font-weight: bold;" aria-current="page" href="addStudentbyinstructor.php">Register</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" style="color: black; font-weight: bold;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
            <li><a class="dropdown-item" href="login.html">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>-->

<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2017/02/05/00/08/graduation-2038864_1280.jpg" style="" class="d-block" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2017/05/27/23/27/graduation-2349741_1280.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2018/05/26/06/46/graduation-cap-3430714_640.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2017/02/05/00/08/graduation-2038864_1280.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2017/05/27/23/27/graduation-2349741_1280.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2018/05/26/06/46/graduation-cap-3430714_640.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->

<br>
	<?php

  require_once('connection.php');
  $aid = $_SESSION['id'];
  $query = "SELECT class_id  ";
  $query .="    FROM classesofinstructor ";
  $query .="INNER JOIN tbluser ON classesofinstructor.id = tbluser.id ";
  $query .="WHERE tbluser.id= $aid;";
  $query_run= mysqli_query($link,$query);
  $row=mysqli_num_rows($query_run);
  echo'<h1><p class="text-center fs-2 fw-bolder" style="color: black;"> You Have: '.$row.' Class</p></h1>';
  ?>
<br>
  <?php

  $aid = $_SESSION['id'];
  $query = "SELECT  classes.class_id,classes.Course_Name,classes.Course_Code,classes.Room,classes.Name_Of_Doctor,classes.hour,classes.Years,classes.Semester,classes.day,classes.section ";
  $query .="    from classes ";
  $query .="INNER JOIN classesofinstructor ON classes.class_id= classesofinstructor.class_id ";
  $query .="INNER JOIN tbluser ON classesofinstructor.id = tbluser.id ";
  $query .="WHERE tbluser.id= $aid;";

 
  $result = mysqli_query($link, $query);
  if (($result) && (mysqli_num_rows($result) > 0)){
  //$query = "SELECT * from students";
  //$result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="table table-striped">'; //styled-table
			echo '<thead class="bg-dark"><tr><th style="color: white;">#</th> <th style="color: white;">Course Name</th><th style="color: white;">Course Code</th><th style="color: white;">Room</th><th style="color: white;">Hour</th><th style="color: white;">Years</th><th style="color: white;">Semester</th><th style="color: white;">Day</th><th style="color: white;">Section</th><th style="color: white;">Show students</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr> <td>' . $row['class_id'] . '</td><td>' . $row['Course_Name'] . '</td><td>' . $row['Course_Code'] . '</td><td>' . $row['Room']. '</td><td>' . $row['hour']. '</td><td>' . $row['Years']. '</td><td>' . $row['Semester']. '</td><td>' . $row['day'] . '</td><td>' . $row['section']. '</td> <td><a href="studentsClass.php?idofclassToshowStudents='.$row['class_id'].'">	<button class="btn btn-light btn-outline-dark" type="button" id="submit">Students</button>';
				// .'<td><a href="deleteStudents.php?id='.$row['class_id'].'">	<button type="button" id="submit">Delete</button>';
				  
			}
			echo '</table>';
		}

		}else
    echo "<h1 >There is No classes </h1>"
		
	?>
  <br>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
    </body>
</html>