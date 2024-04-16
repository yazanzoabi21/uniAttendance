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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">

    <link rel="stylesheet" href="home.css">
    
    <title>Admin Page</title>
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
            <a class="nav-link text-dark active" aria-current="page" href=""><span class="las la-users"></span><img src="images/home.gif" width="40px" height="40px" alt=""> HOME</a>
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
                    Manager
                </h2>

                <div class="user_wrapper">
                    <img src="adminnnn.jpg" width="50px" height="50px" alt="">
                    <div>
                        <h4>Dr. George</h4>
                        <small>Professor</small>
                    </div>
                </div>
            </header>
    </div>

<div class="cover-container d-flex w-100 h-100 p-3 m-auto flex-column bg-light">

  <main class="px-3">
    <h1>World's Best University.</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
  </main>
</div>

<div class="col-sm-3">
    <div class="card  h-100" style="width: 20rem; background-color: #F8F2ED">
        <img src="images/tt.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">Universities frequently have attendance policies that specify what is expected of students in terms of class attendance. These rules can change depending on the institution. While some colleges may place a strong emphasis on student accountability and grant more latitude, others might have stringent attendance policies.</p>
        </div>
    </div>
</div>

        
    </body>
</html>