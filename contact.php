<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--CSS-->
    <link rel="stylesheet" href="contact.css">
    

    <title>Contact form</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <!--<form action="processContact.php" method="POST">-->
            <div class="col-md-7">
                <h4>Get in touch</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fisrt Name</label>
                    <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1" placeholder="Enter your first name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" name="lasttName" class="form-control" id="exampleFormControlInput1" placeholder="Enter your last name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                    <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter your number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="email" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            <!--</form>-->
                <div class="form">
                    <button type="submit" value="Submit" class="btn btn-primary">Send</button>
                    <a href="index.php"><button class="btn btn-primary" value="Submit" type="submit">Home</button></a>
                </div>
            </div>
            
            
            <div class="col-md-5">
                <h4>Contact us</h4> <hr>
                <div class="mt-5">
                    <div class="d-flex">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>Address: Dahr el Ain Road, Al Haykalieh</p>
                    </div> <hr>
                    <div class="d-flex">
                        <i class="bi bi-telephone-fill"></i>
                        <p>Contact: +961-6-416333</p>
                    </div> <hr>
                    <div class="d-flex">
                        <i class="bi bi-envelope-fill"></i>
                        <p>Email: admissions@liu.edu.lb</p>
                    </div> <hr>
                    <div class="d-flex">
                        <i class="bi bi-browser-chrome"></i>
                        <p>Website: www.liu.edu lb</p>
                    </div> <hr>
                </div>
            </div>
            
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>