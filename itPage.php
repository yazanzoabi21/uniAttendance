<?php 
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.html');
}?>

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
    
    <title>View Instructors</title>

    
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Show All Instructors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ShowAllClassesByIt.php">Show All Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ShowAllStudentsByIT.php">Show All Students</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu bg-secondary" style="color: white;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light fw-b" href="changepassword.php">Change Password</a></li>
            <li><a class="dropdown-item text-light fw-b" href="login.html">LogOut</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <p class="text-center fs-1">List Of Instructors</p>

<?php
	
  require_once('connection.php');

  $query = "SELECT * FROM `tbluser` where role = 'Instructor'";
  $result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="table table-hover">'; //styled-table
			echo '<thead ><tr ><th>#</th> <th>Name</th><th>Last Name</th><th>Major</th><th>Phone Number</th><th>Email</th><th>Update</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['id'] . '</td><td>' . $row['Name'] . '</td><td>' . $row['Last_Name'] . '</td><td>' . $row['Major'] . '</td><td>' . $row['Phone']. '</td><td>' . $row['Email']. '</td>'
        .'<td><a href="updateinstuctor.php?id='.$row['id'].'"> <button class="btn btn-outline-secondary" type="submit"><img src="images/pencil-square.svg" style="width: 30px;" > </button>';
				
        
			}
			echo '</table>';
 

		}else
    echo "<h1 >There is No Doctor </h1>"
		
?>


    </body>
</html>