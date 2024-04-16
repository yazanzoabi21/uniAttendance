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


  $query = "INSERT INTO tbluser (`Name`, `Last_Name`, `Phone`, `Major`,`Email`,`password`,`role`) VALUES ('$name','$lastname','$phone','$major','$email','123','Instructor')";
  mysqli_query($conn, $query);

  header('Location: ShowAllDoctors.php');
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
    <link rel="stylesheet" href="addDr.css">
    
    <title>Isert Data</title>
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
          <a class="nav-link text-dark active" href="Instructor.php"><span class="las la-users"></span><img src="images/manager.png" width="40px" height="40px" alt=""> Instructor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="classes.php"><span class="las la-users"></span><img src="images/saf.png" width="40px" height="40px" alt=""> Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="student.php"><img src="images/graduated.png" width="40px" height="40px" alt=""> Students</a>
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
                    Adding Instructor
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

      

  <br><br><br><br>

<section class="container my-5 bg-light w-50 text-dark p-1">

<form class="row g-2 p-3" method="POST" autocomplete="off">

  <div class="col-md-6">
    <label for="" class="form-label">First Name</label>
    <input type="text" name="name" class="form-control" placeholder="Add Fisrt Name" required value="">
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control" placeholder="Add Last Name" required value="">
  </div>

  <div class="col-12">
    <label for="" class="form-label">Major</label>
    <input type="text" name="major" class="form-control" placeholder="Add your Major" required value="">
  </div>

  <div class="col-12">
    <label for="" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required value="">
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Add your Email" required value="">
  </div>
  
  <div class="col-12">
    <br>
    <button type="submit" name="submit" id="submit" class="btn btn-dark">Submit</button>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="Instructor.php"><button class="btn btn-dark me-md-2" type="button">Home</button></a>
  </div>

</form>

</section>


    <!--<div class="d-grid gap-2 d-md-flex justify-content-md-end fixed-bottom">
      <a href="Instructor.php"><button class="btn btn-secondary me-md-2" type="button">Home</button></a>
    </div>-->


  
  </body>
</html>