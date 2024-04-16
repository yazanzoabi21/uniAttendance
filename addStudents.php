<?php
/*session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.html');
}*/
require 'connectiion.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];

  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $major = $_POST["major"];
  $course = $_POST["course"];

 
  

  $query = "INSERT INTO students (`Name`, `Last_Name`,`Email`,`Course`, `Phone`,`major`) VALUES ('$name','$lastname','$email','$course','$phone','$major')";
  mysqli_query($conn, $query);

  //header('Location: ShowAllDoctors.php');

 
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <!--<link rel="stylesheet" href="styleBar.css">-->
  <link rel="stylesheet" href="styleAddStd.css">

    <meta charset="utf-8">
    <title>Insert Data</title>
   
  </head>

  <body>

    <!--<div class="navbar">
        <a href="addStudents.php">Add Students</a>
        <a href="ShowAllStudents.php">Show All Students</a>
        <a href="ShowAttendance.php">Show Attendances</a>
        <a href="login.php">LogOut</a>
    </div>-->

    <div class="topnav">
  <a class="active" href="addStudents.php">ADD Student</a>
  <a href="ShowAllStudents.php">Show all Students</a>
  <a href="">Show All Attendance</a>
  <a href="login.php">LogOut</a>
</div>

    
    <h1>Add a New Student:</h1>

  
<div class="wrapper">

    <form class="" action="" method="post" autocomplete="off">
    <div style="display: flex; ">
    <input type="text" name="name" class="input text" placeholder="first Name "required value="">
      <input type="text" name="lastname" class="input text" placeholder="last Name "required value="">
</div>
      <input type="text" name="major" class="input text" placeholder="Major"required value="">
      
      <select name="course" required value="">
    <option value="">Select course</option>
    <?php 
    $query ="SELECT year FROM year";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['year'];
    ?>
    <?php
    //selected option
    if(!empty($year) && $year== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
  
  <br>
      <input type="text" name="phone"class="input text" placeholder="Student Number " required value="">
      
      <input type="text" name="email"class="input text"placeholder="Add email" required value="">
      <br>
      <button type="submit"id="submit" name="submit">Submit</button>
   

    </form>
    </div>
   
  
  </body>
</html>
  </body>
</html>