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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/
                                    line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="showingDr.css">
    
    <title>View Classes</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg navbar-light"> <!--style="background-color: #6D6D6D;"-->
  <div class="container-fluid">
            <!--<div class="nav-logo">
                <img src="images/user.png" width="40px" height="40px" alt="">
                <a class="navbar-brand text-light" href="#">Admin</a>
            </div>-->
            <br><br><br><br><br>
    <!--<a class="navbar-brand" href="#">Admin</a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="#"><span class="las la-users"></span><img src="images/home.gif" width="40px" height="40px" alt=""> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Instructor.php"><span class="las la-users"></span><img src="images/manager.png" width="40px" height="40px" alt=""> Instructor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="classes.php"><span class="las la-users"></span><img src="images/saf.png" width="40px" height="40px" alt=""> Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active" href="student.php"><img src="images/graduated.png" width="40px" height="40px" alt=""> Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="changepassword.php"><img src="images/chPass.png" width="30px" height="30px" alt=""> Change Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="login.html"><img src="images/arrojWw9F5j5.gif" width="30px" height="30px" alt=""> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="main_content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <!--<img src="images/menu.png"  width="30px" height="30px" alt="">-->
                    </label>
                    List Of Students
                </h2>

                <div class="user_wrapper">
                    <img src="adminnnn.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Dr George</h4>
                        <small>Professor</small>
                    </div>
                </div>
            </header>
    </div>

	
	<?php
	

  require_once('connection.php');
 
  //$aid = $_SESSION['id'];
  /*$query = "SELECT  students.Student_id,students.Name,students.Last_Name,students.Email,students.Course,students.Phone,students.major ";
  $query .="    from students ";
  $query .="INNER JOIN registeredstudents ON students.Student_id = registeredstudents.Student_id ";
  $query .="INNER JOIN tbluser ON registeredstudents.id = tbluser.id ";
  $query .="WHERE tbluser.id= $aid;";*/
  
  $query = "SELECT * from students";
  $result = mysqli_query($link, $query);
  if (($result) && (mysqli_num_rows($result) > 0)){
  //$query = "SELECT * from students";
  //$result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="styled-table">';
			echo '<thead ><tr style="color: white;"><th style="color: white;">#</th> <th style="color: white;">Fisrt Name</th><th style="color: white;">Last Name</th><th style="color: white;">Major</th><th style="color: white;">Email</th><th style="color: white;">Phone Number</th><th style="color: white;">Delete Student</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['Student_id'] . '</td><td>' . $row['Name'] . '</td><td>' . $row['Last_Name'] . '</td><td>' . $row['major']. '</td><td>' . $row['Email']. '</td><td>' . $row['Phone']. '</td>'
        .'<td><a href="deleteStudents.php?id='.$row['Student_id'].'">	<button type="button" id="submit"><img src="images/bin.gif" width="40px" height="40px"></button>';
			}
			echo '</table>';
		}

		}else
    echo "<h1 >There Are No Students </h1>"
		
	?>
	
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    	<a href="student.php"><button class="btn btn-outline-dark me-md-2" type="button">Home</button></a>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	</body>
</html>