<?php
$servername="localhost";
//require 'connection.php';
$username="root";
$password="";
$database="university";
$connection = new mysqli($servername, $username, $password, $database);



$id="";
$Course_Name="";
$Course_Code="";
$Room="";
$hour="";
$Years="";
$Semester="";
$day="";
$section="";


  if($_SERVER['REQUEST_METHOD']=='GET'){

    if (!isset($_GET["id"])){
      header("location:ShowAllClassesByIT.php");
      exit;
    }
    $id = $_GET["id"];
      $sql="SELECT * FROM classes WHERE class_id=$id";
      $result=$connection->query($sql);
       $row=$result->fetch_assoc();

       if(!$row){
          header("location:ShowAllClassesByIT.php");
          exit;
        }
        $class_id=$row["class_id"];


        $Course_Name=$row["Course_Name"];
        $Course_Code=$row["Course_Code"];
        $Room=$row["Room"];
        $hour=$row["hour"];
        $Years=$row["Years"];
        $Semester=$row["Semester"];
        $day=$row["day"];
        $section=$row["section"];
      }
        
         
         else{
          //post method:update 
         $id=$_POST["class_id"];

          $Course_Name=$_POST["Course_Name"];
          $Course_Code=$_POST["Course_Code"];
          $Room=$_POST["Room"];
          $hour=$_POST["hour"];
          $Years=$_POST["Years"];
          $Semester=$_POST["Semester"];
          $day=$_POST["day"];
          $section=$_POST["section"];
          do{
            if(empty($Course_Name)||empty($Course_Code)||empty($Room)||empty($hour)||empty($Years)||empty($Semester)||empty($day)||empty($section)){
              echo "<h1 >select all data </h1>";
            }
            $sql="UPDATE classes SET Course_Name='$Course_Name',Course_Code='$Course_Code',Room='$Room',hour='$hour',Years='$Years' ,Semester='$Semester',day='$day',section='$section' WHERE class_id = $id";
             $result=$connection->query($sql);
             if(!$result){
                echo "<h1 >Invalid Query</h1>";
              }
              echo "<h1 >update correctly</h1>";
              header("location:ShowAllClassesByIT.php");
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


    
  <p class="text-center fs-1">Updates Classes Informations</p>

<br><br>

<section class="container my-5 bg-light w-50 text-dark p-1">

<form class="row g-2 p-3" method="POST" autocomplete="off">

  <input type="hidden" name="class_id" value="<?php echo $class_id;?>">

  <div class="col-md-6">
    <label for="" class="form-label fw-bolder">Course Name</label>
    <input type="text" name="Course_Name" class="form-control" value="<?php echo $Course_Name;?>" placeholder="Update Course Name" required value="">
  </div>

  <div class="col-md-6">
    <label for="" class="form-label fw-bolder">Course Code</label>
    <input type="text" name="Course_Code" class="form-control" value="<?php echo $Course_Code;?>" placeholder="Update Course Code" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Room</label>
    <input type="text" name="Room" class="form-control" value="<?php echo $Room;?>" placeholder="Update Room" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Hour</label>
    <input type="text" name="hour" class="form-control" value="<?php echo $hour;?>" placeholder="Update Hour" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Years</label>
    <input type="text" name="Years" class="form-control" value="<?php echo $Years;?>" placeholder="Update Year" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Semester</label>
    <input type="text" name="Semester" class="form-control" value="<?php echo $Semester;?>" placeholder="Update Semester" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Day</label>
    <input type="text" name="day" class="form-control" value="<?php echo $day;?>" placeholder="Update Day" required value="">
  </div>

  <div class="col-6">
    <label for="" class="form-label fw-bolder">Section</label>
    <input type="text" name="section" class="form-control" value="<?php echo $section;?>" placeholder="Update Section" required value="">
  </div>

  <div class="col-12">
    <br>
    <button type="submit" name="submit" id="submit" class="btn btn-dark">Update</button>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="ShowAllClassesByIt.php"><button class="btn btn-dark me-md-2" type="button">Home</button></a>
  </div>

</form>

  </body>
</html>