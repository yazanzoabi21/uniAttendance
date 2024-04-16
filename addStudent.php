<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.html');
}
require 'connectiion.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];

  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $major = $_POST["major"];
  //$course = $_POST["course"];
  //$class_id = $_POST["class_id"];

 
  $aid = $_SESSION['id'];

  $query = "INSERT INTO students (`Name`, `Last_Name`,`Email`,`Phone`,`major`) VALUES ('$name','$lastname','$email','$phone','$major')";
  mysqli_query($conn, $query);
 // $sql= mysqli_query($conn," SELECT students.student_id AS last_students From students ORDER BY students.student_id DESC limit 1");
 // $print_data=mysqli_fetch_row($sql);
  //$query = " INSERT INTO `registeredstudents`(`id`, `Student_id`) VALUES ('$aid','$print_data[0]')";
  //mysqli_query($conn, $query);
 //$query = " INSERT INTO `classesofstudents`(`class_id`, `Student_id`) VALUES ('$course','$print_data[0]')";
 
 //mysqli_query($conn, $query);
  header('Location: ShowAllStudents.php');

 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/
                                    line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="addStd.css">
    
    <title>Isert Data</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light"> <!--style="background-color: #6D6D6D;"-->
  <div class="container-fluid">
  
            <br><br><br><br><br>
 
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
                    Adding Student
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

<!--<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/
                                    line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style22.css">
    <link rel="stylesheet" href="addStd.css">

    <title>Insert Data</title>
   
  </head>

  <body>

  <input type="checkbox" id="nav-toggle">
        <div class="sidebar">

            <br/><br/>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href=""> <span class="las la-users"></span>
                                    <img src="images/home.png" width="30px" height="30px" alt="">
                                    <span>Home</span></a>
                    </li>
        
                    <li>
                        <a href="Instructor.php"> <span class="las la-users"></span>
                                    <img src="images/manager.png" width="40px" height="40px" alt="">
                                    <span>Instructor</span></a>
                    </li>

             

                    <li>
                        <a href="classes.php"> <span class="las la-users"></span>
                                    <img src="images/saf.png" width="40px" height="40px" alt="">
                                    <span>Classes</span></a>
                    </li>

            

                    <li>
                        <a href="student.php" class="active"> <span class="las la-users"></span>
                                    <img src="images/std.png" width="40px" height="40px" alt="">
                                    <span>Students</span></a>
                    </li>

              

                    <li>
                        <a href="changepassword.php"> <span class="las la-igloo"></span>
                                    <img src="images/chPass.png" width="30px" height="30px" alt="">
                                    <span>Change Password</span></a>
                    </li>

                    <li>
                        <a href="login.html"> <span class="las la-igloo"></span>
                                    <img src="images/arrojWw9F5j5.gif" width="30px" height="30px" alt="">
                                    <span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main_content">

            <header>
                <h2>
                    <label for="nav-toggle">
                        <img src="images/menu.png"  width="30px" height="30px" alt="">
                    </label>
                    Add Student
                </h2>

     
                <div class="user_wrapper">
                    <img src="adminnnn.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Dr George</h4>
                        <small>Professor</small>
                    </div>
                </div>
            </header>
            
        </div>-->

	

  <br><br><br>



<section class="container my-5 bg-light w-50 text-dark p-1">
<form class="row g-2 p-3" method="POST" autocomplete="off">

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Fisrt Name</label>
    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Enter first name" required value="">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="inputPassword4" placeholder="Enter last name" required value="">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Major</label>
    <input type="text" name="major" class="form-control" id="inputAddress" placeholder="Enter major" required value="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="Enter phone number" required value="">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputCity" placeholder="Enter email" required value="">
  </div>

  <div class="col-12">
    <br>
    <button type="submit" name="submit" id="submit" class="btn btn-dark">Submit</button>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="student.php"><button class="btn btn-dark me-md-2" type="button">Home</button></a>
  </div>

</form>
</section>
   
  
  </body>
</html>