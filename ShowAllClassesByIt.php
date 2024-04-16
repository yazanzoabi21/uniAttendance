<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
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
    <link rel="stylesheet" href="it.css">
    <link rel="stylesheet" href="InstructorPage.css">
    
    <title>IT</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <!--<a class="navbar-brand" href="#">IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="itPage.php">Show All Instructors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ShowAllClassesByIt.php">Show All Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ShowAllStudentsByIT.php">Show All Students</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light fw-b" href="changepassword.php">Change Password</a></li>
            <li><a class="dropdown-item text-light fw-b" href="login.html">LogOut</a></li>
          </ul>
        </li>
      </ul>
      <!--<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>


	<p class="text-center fs-1">List Of Classes</p>	

	<?php
	
  require_once('connection.php');

  $query = "SELECT * from classes";
  $result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="table table-hover">'; //styled-table
			echo '<thead ><tr ><th>#</th> <th>Course Name</th><th>Course Code</th><th>Section</th><th>Name Of Instructor</th><th>Hour</th><th>Day</th><th>Room</th><th>Semester</th><th>Years</th><th>Update</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['class_id'] . '</td><td>' . $row['Course_Name'] . '</td><td>' . $row['Course_Code'] . '</td><td>' . $row['section'] . '</td><td>' . $row['Name_Of_Doctor']. '</td><td>' . $row['hour'] . '</td><td>' . $row['day'] . '</td><td>' . $row['Room']. '</td><td>' . $row['Semester'] . '</td><td>' . $row['Years'] . '</td><td>
        <a href="updateclass.php?id='.$row['class_id'].'"> <button class="btn btn-outline-secondary" type="submit"><img src="images/pencil-square.svg" style="width: 30px;"> ';
				
        
			}
			echo '</table>';
    

		}
		
	?>
	
	</body>
</html>