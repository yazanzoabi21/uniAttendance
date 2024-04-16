<?php 
session_start();
/*
if (isset($_SESSION['aid']) && isset($_SESSION['apassword'])) {
    
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}*/
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

    
    <!--<link rel="stylesheet" href="changePass.css">
    
    <link rel="stylesheet" href="styleChangePass.css">
    <link rel="stylesheet" href="style22.css">-->

    <link rel="stylesheet" href="passchange.css">
    
    <title>Change Password</title>



<?php
    require ('connectiion.php');

 $aid = $_SESSION['loggedin'];
 $role = "";
    
            
            $query = "SELECT * FROM tbluser WHERE id = '$aid' ";
			
            $result = mysqli_query($conn, $query);
			if (($result) && (mysqli_num_rows($result) == 1)){		

           
                    while($row = mysqli_fetch_assoc($result))
                        {
                            if($row["role"] == "Manager")
                                {
                                    echo '<link rel="stylesheet" href="admin.css">';
									/*echo '<nav class="nav nav-pills nav-fill">';
									echo ' <a class="nav-link active" aria-current="page" href="addDr.php">ADD doctor</a>';
									echo '  <a class="nav-link" href="ShowAllDoctors.php">Show all Doctor</a>';
									echo '  <a class="nav-link" href="addClasses.php">Add class</a>';
									echo ' <a class="nav-link" href="ShowAllClasses.php">Show All Classes</a>';
									echo '<a class="nav-link" href="addStudent.php">ADD Student</a>';
									echo '<a class="nav-link" href="ShowAllStudents.php">Show all Students</a>';
									echo '  <a class="nav-link" href="changepassword.php">change password</a>';
									echo '  <a class="nav-link" href="login.html">LogOut</a>';
                                    echo '<a href="adminPage.php"><button class="btn btn-secondary me-md-2" type="button">Home</button></a>';
									echo '</nav>';*/

                                    echo '<nav class="navbar navbar-expand-lg navbar-light">
                                                <div class="container-fluid">
            
                                            <br><br><br><br><br>
  
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="adminPage.php"><span class="las la-users"></span><img src="images/home.gif" width="40px" height="40px" alt=""> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Instructor.php"><span class="las la-users"></span><img src="images/manager.png" width="40px" height="40px" alt=""> Instructor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="classes.php"><span class="las la-users"></span><img src="images/saf.png" width="40px" height="40px" alt=""> Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="student.php"><img src="images/graduated.png" width="40px" height="40px" alt=""> Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark active" href="changepassword.php"><img src="images/chPass.png" width="30px" height="30px" alt=""> Change Password</a>
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
                        <img src="images/chPass.png" width="40px" height="40px" alt="">
                    </label>
                    Changing Password
                </h2>

                <div class="user_wrapper">
                    <img src="adminnnn.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Dr George</h4>
                        <small>Professor</small>
                    </div>
                </div>
            </header>
        </div>';
								
                                }
                                else if($row["role"] == "IT")
                                {
                                    echo '<link rel="stylesheet" href="it.css">
                                            <link rel="stylesheet" href="InstructorPage.css">';
									/*echo '<div class="topnav">';
									echo '<a href="ShowAllDoctorsByIt.php">Show all Doctor</a>';
									echo '<a href="ShowAllClassesByIt.php">Show All Classes</a>';
									echo '<a href="ShowAllStudentsByIT.php">Show All Students</a>';
									echo '<a href="changepassword.php">change password</a>';
								  
								  
									echo '<a href="login.html">LogOut</a>';
                                    echo '<a href="itPage.php"><button class="btn btn-secondary me-md-2" type="button">Home</button></a>';

									echo '</div>';*/

                                    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                                    <div class="container-fluid">
                                      
                                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="itPage.php">Show All Instructors</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="ShowAllClassesByIt.php">Show All Classes</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="ShowAllStudentsByIT.php">Show All Students</a>
                                          </li>
                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              More
                                            </a>
                                            <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                                              <li><a class="dropdown-item text-light fw-b text-decoration-line-through disabled" href="changepassword.php">Change Password</a></li>
                                              <li><a class="dropdown-item text-light fw-b" href="login.html">LogOut</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </nav>';
                                }
                            else
                                {	
                                    echo '<link rel="stylesheet" href="InstructorPage.css">';			
									/*echo '<div class="topnav">';
									echo ' <a class="active" href="addStudent.php">ADD Student</a>';
									echo ' <a href="ShowAllStudents.php">Show all Students</a>';
									echo '   <a href="Classesofinstructor.php">Classes</a>';
									echo ' <a  href="addStudentbyinstructor.php">Register</a>';

									echo '<a href="changepassword.php">change password</a>';

									echo ' <a href="login.html">LogOut</a>';
                                    echo '<a href="doctorPage.php"><button class="btn btn-secondary me-md-2" type="button">Home</button></a>';

									echo '</div>';*/

                                    echo '<nav class="navbar navbar-expand-lg navbar-light bg-success">
                                    <div class="container-fluid">
                                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link " style="color: black; font-weight: bold;" aria-current="page" href="doctorPage.php">Classes</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link " style="color: black; font-weight: bold;" aria-current="page" href="addStudentbyinstructor.php">Register</a>
                                          </li>
                                          
                                          <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle text-light fw-b active" style="color: black; font-weight: bold;" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              More
                                            </a>
                                            <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                                              <li><a class="dropdown-item text-white text-decoration-line-through disabled" href="changepassword.php">Change Password</a></li>
                                              <li><a class="dropdown-item" href="login.html">Logout</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </nav>';
                                }
                        }
                }
?>
	
    </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




<br><br><br><br>


<form action="passwordcheck.php" method="post">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password"
             required value="">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password"
              required value="">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password"
              required value="">
     	       <br>

			<button type="submit">CHANGE</button>
</form>

       
<?php 

/*}else{
     header("Location: login.html");
     exit();
}*/
 ?>

    </body>
</html>