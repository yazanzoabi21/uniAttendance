<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
	require 'connectiion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="InstructorPage.css">
    <title>Add Students</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<ul class="nav nav-tabs justify-content-center bg-success">
  <li class="nav-item">
    <a class="nav-link" style="color: white; font-weight: bold;" aria-current="page" href="doctorPage.php">Classes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color: black; font-weight: bold;" aria-current="page" href="addStudentbyinstructor.php">Register</a>
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" style="color: white; font-weight: bold;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">More</a>
    <ul class="dropdown-menu bg-success">
      <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
      <li><a class="dropdown-item" href="login.html">Logout</a></li>
    </ul>
  </li>
</ul>
<br>
	<?php
	

  require_once('connection.php');
 
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
			echo '<thead class="bg-dark"><tr ><th style="color: white;">#</th> <th style="color: white;">Course Name</th><th style="color: white;">Course Code</th><th style="color: white;">Room</th><th style="color: white;">Hour</th><th style="color: white;">Years</th><th style="color: white;">Semester</th><th style="color: white;">Day</th><th style="color: white;">Section</th><th style="color: white;">Register Student</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr>        <td>' . $row['class_id'] . '</td><td>' . $row['Course_Name'] . '</td><td>' . $row['Course_Code'] . '</td><td>' . $row['Room']. '</td><td>' . $row['hour']. '</td><td>' . $row['Years']. '</td><td>' . $row['Semester']. '</td><td>' . $row['day'] . '</td><td>' . $row['section']. '</td>'.'<td><a href="RegisterStudentsInClass.php?idofclass='.$row['class_id'].'">	<button class="btn btn-light btn-outline-dark" type="button" id="submit">Register student</button>';
				
        
			}
			echo '</table>';
		}

		}else
    echo "<h1 >There is No classes </h1>"
		
	?>
	
	</body>
</html>