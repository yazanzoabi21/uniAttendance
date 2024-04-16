<?php
$servername="localhost";
//require 'connection.php';
$username="root";
$password="";
$database="university";
$connection = new mysqli($servername, $username, $password, $database);



$id="";
$Name="";
$Last_Name="";

$Email="";
$Phone="";
$Major="";

  if($_SERVER['REQUEST_METHOD']=='GET'){

    if (!isset($_GET["id"])){
      header("location:ShowAllDoctorsByIT.php");
      exit;
    }
    $id = $_GET["id"];
      $sql="SELECT * FROM tbluser WHERE id=$id  AND role='Instructor'";
      $result=$connection->query($sql);
       $row=$result->fetch_assoc();

       if(!$row){
          header("location:ShowAllDoctorsByIT.php");
          exit;
        }

        $id=$row["id"];

        $Name=$row["Name"];
        $Last_Name=$row["Last_Name"];
        $Email=$row["Email"];
        $Phone=$row["Phone"];
        $Major=$row["Major"];
      }
        
         
         else{
          //post method:update 
         $id=$_POST["id"];

          $Name=$_POST["Name"];
          $Last_Name=$_POST["Last_Name"];
          $Email=$_POST["Email"];
          $Phone=$_POST["Phone"];
          $Major=$_POST["Major"];
          do{
            if(empty($Name)||empty($Email)||empty($Phone)||empty($Major)||empty($Last_Name)){
              echo "<h1 >select all data </h1>";
            }
            $sql="UPDATE tbluser SET Name='$Name',Email='$Email',Phone='$Phone',Major='$Major',Last_Name='$Last_Name' WHERE id = $id";
             $result=$connection->query($sql);
             if(!$result){
                echo "<h1 >Invalid Query</h1>";
              }
              echo "<h1 >update correctly</h1>";
              header("location:itPage.php");
              exit;
            }while(false);
          }
        
	?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="addDr.css">
    <link rel="stylesheet" href="updatestudent.css">

    <title>Updates Informations</title>

    <style>

    </style>

  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    
  <p class="text-center fs-1">Updates Instructors Informations</p>

<br><br>

<section class="container my-5 bg-light w-50 text-dark p-1">

<form class="row g-2 p-3" method="POST" autocomplete="off">

  <input type="hidden" name="id" value="<?php echo $id;?>">

  <div class="col-md-6">
    <label for="" class="form-label fw-bolder">First Name</label>
    <input type="text" name="Name" class="form-control" value="<?php echo $Name;?>" placeholder="Update Fisrt Name" required value="">
  </div>

  <div class="col-md-6">
    <label for="" class="form-label fw-bolder">Last Name</label>
    <input type="text" name="Last_Name" class="form-control" value="<?php echo $Last_Name;?>" placeholder="Update Last Name" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Major</label>
    <input type="text" name="Major" class="form-control" value="<?php echo $Major;?>" placeholder="Update Major" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Phone Number</label>
    <input type="text" name="Phone" class="form-control" value="<?php echo $Phone;?>" placeholder="Update Phone Number" required value="">
  </div>

  <div class="col-12">
    <label for="" class="form-label fw-bolder">Email</label>
    <input type="text" name="Email" class="form-control" value="<?php echo $Email;?>" placeholder="Update Email" required value="">
  </div>

  <div class="col-12">
    <br>
    <button type="submit" name="submit" id="submit" class="btn btn-dark">Update</button>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="itPage.php"><button class="btn btn-dark me-md-2" type="button">Home</button></a>
  </div>

</form>

</section>


  </body>
</html>