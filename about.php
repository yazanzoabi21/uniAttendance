<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
    
    <title>About Us</title>

    <style>
        .nav-link {
            transition: all 0.2s;
        }

        .nav-link:hover {
            border-bottom: 4px solid white;
            border-top: 4px solid white;
            border-radius: 7px;
        }
    </style>

  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Attendance System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="heading">
        <h1>About Us</h1>
        <br>
        <p>Welcome to the Attendance University System! We are a cutting-edge technological solution designed to streamline and simplify attendance management for universities and educational institutions. Our system provides a comprehensive and efficient way to track student attendance, manage records, and enhance overall campus productivity.</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/01/28/people-2562626_640.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>University Attendance</h2>
                <p>At Attendance University System, we understand the importance of accurate attendance records in ensuring student success and academic excellence. Our platform leverages advanced technologies to offer a user-friendly and reliable solution that benefits both students and faculty members.</p>
            </div>
        </section>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>