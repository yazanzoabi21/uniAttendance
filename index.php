<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    

    <title>Track Attendance</title>
    <style>
        /* Custom styles */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
            color: $yellow-300;
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: left;
            height: 100vh;
            color: grey;
            text-align: left;
            padding: 10px;
        }

        .hero-content {
            text-align: left;
            margin: 100 100 100 10;
            border-radius: 100 500 100 3;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
        }

       .get-started-btn {
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            background-color: #198754;
            color: #fff;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .get-started-btn:hover {
            background-color: #3BB143;
        }

        .picture-container {
            width: 650px;
            height: 600px;
            background-image: url("images/home.jpg");
            background-size: cover;
            background-position: center;
            border-radius: 20%;
            position: absolute;
            right: 10px;
            top: calc(50% - 250px);
        }

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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Attendance System</h1>
            <p>Manage and track attendance with ease</p>
            
            <a class="btn btn-success rounded-pill shadow" href="login.html">Get Started</a>
        </div>
        <div class="picture-container"></div>
    </div>

    <!--footer starts -->
    <footer class="bg-success text-light text-center">
        <p> Copyright © 2023 <br>
            © All rights reserved by Attendance System</p>
      </footer>
    <!-- footer ends -->

    <script>
        // Simulate page load for demonstration purposes
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelector(".loader").style.display = "none";
            }, 2000);
        });
    </script>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>