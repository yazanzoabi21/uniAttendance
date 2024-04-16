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
    <link rel="stylesheet" href="styleAddShow.css">
    
    <title>Classes Page</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		

  <div class="bg">
        <a href="addClasses.php">
            <img src="images/ADDCLASSES.png" class="rounded float-start" alt="">
            <br><br>
            <div class="Atxt">
                Add Classes
            </div>
        </a>
        <a href="ShowAllClasses.php">
            <img src="images/showingClass.jpg" class="rounded float-end" alt="">
            <br><br>
            <div class="Stxt">
                Show Classes
            </div>
        </a>
  </div>

  <br>


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
            <a class="nav-link text-dark" aria-current="page" href="adminPage.php"><span class="las la-users"></span><img src="images/home.gif" width="40px" height="40px" alt=""> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Instructor.php"><span class="las la-users"></span><img src="images/manager.png" width="40px" height="40px" alt=""> Instructor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active" href="classes.php"><span class="las la-users"></span><img src="images/saf.png" width="40px" height="40px" alt=""> Classes</a>
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
                        <img src="images/saf.png" width="40px" height="40px" alt="">
                    </label>
                    Classes
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

  <!--<input type="checkbox" id="nav-toggle">
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
                        <a href="Instructor.php" > <span class="las la-users"></span>
                                    <img src="images/manager.png" width="40px" height="40px" alt="">
                                    <span>Instructor</span></a>
                    </li>

                 
                    <li>
                        <a href="classes.php" class="active"> <span class="las la-users"></span>
                                    <img src="images/saf.png" width="40px" height="40px" alt="">
                                    <span>Classes</span></a>
                    </li>

             

                    <li>
                        <a href="student.php"> <span class="las la-users"></span>
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
                    Manager
                </h2>

                <div class="search_wrapper">
                    <img src="images/QLHLOlC7W2BG.gif" width="30px" height="30px" alt="">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here"/>
                </div>

                <div class="user_wrapper">
                    <img src="adminnnn.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Dr George</h4>
                        <small>Professor</small>
                    </div>
                </div>
            </header>
            

        </div>


    <div class="sidebar-menu">
            <ul>

                    <li>
                        <a href="" class="active"> <span class="las la-users"></span>
                                    
                                    <span>Classes</span>
                        </a>
                    
                        <a href="addClasses.php"><button>Add Classes</button></a>
                        <a href="ShowAllClasses.php"><button>Show Classes</button></a>
                    </li>
            </ul>
    </div>-->



    
  </body>
</html>