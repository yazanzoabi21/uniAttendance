<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.html');
}
require 'connectiion.php';

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
                        <!--<img src="images/menu.png"  width="30px" height="30px" alt="">-->
                    </label>
                    Adding Class
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

  

  <br><br><br><br><br>


<section class="container my-2 bg-light w-50 text-dark p-2">

<form class="row g-2 p-3" action="" method="post" autocomplete="off">

  <div class="col-md-6">
    <label for="" class="form-label">Course Name</label>
    <input type="text" name="Course_Name" class="form-control" placeholder="Name of the course" required value="">
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Course Code</label>
    <input type="text"  name="Course_Code" class="form-control" placeholder="Code of the course" required value="">
  </div>

<!--PHP START-->
  <div class="col-md-6">
    <label for="" class="form-label">Select Semester</label>
    <select class="form-select" aria-label="Default select example" name="semester" required value="">
    <option value="">Choose one</option>

    <?php 
    $query ="SELECT semester FROM semester";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['semester'];
    ?>
    <?php
    //selected option
    if(!empty($semester) && $semester== $option){
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

  </div>





  <div class="col-md-6">
    <label for="" class="form-label">Select Year</label>
    
    <select class="form-select" aria-label="Default select example" name="year" required value="">
    <option value="">Select year</option>
    
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

  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Select Day</label>
   

    <select class="form-select" aria-label="Default select example" name="day" required value="">
    <option value="">Select day</option>
    <?php 
    $query ="SELECT day FROM day";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['day'];
    ?>
    <?php
    //selected option
    if(!empty($day) && $day== $option){
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


  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Select Hour</label>
   
  

    <select class="form-select" aria-label="Default select example" name="hour" required value="">
    <option value="">Select hour</option>
    <?php 
    $query ="SELECT hour FROM hour";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['hour'];
    ?>
    <?php
    //selected option
    if(!empty($hour) && $hour== $option){
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



  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Select Section</label>
    
    <select class="form-select" aria-label="Default select example" name="section" required value="">
    <option value="">Select section</option>
    <?php 
    $query ="SELECT section FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['section'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
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


  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Select Room</label>
    
    <select  class="form-select" aria-label="Default select example" name="room" required value="">
    <option value="">Select room</option>
    <?php 
    $query ="SELECT room FROM room";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['room'];
    ?>
    <?php
    //selected option
    if(!empty($room) && $room== $option){
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


  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Select Instructor</label>
  

    <select class="form-select" aria-label="Default select example" name="Name" required value="">
    <option value="">Select Instructor</option>
    <?php 
    $query ="SELECT * FROM tbluser where role = 'Instructor'";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
          //  $option =$optionData['id'];

            $option =$optionData['id'];

           
    ?>
    <?php
    //selected option
   
    if(!empty($Name) && $Name== $option){
    // selected option
    
    ?>
    
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    
    <?php 
     
continue;

   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
    
   <?php
      }
    
    }
    
    ?>
</select>

  </div>
<!--PHP END-->

  
  <div class="col-12">
    <br>
    <button type="submit" name="submit" id="submit" class="btn btn-secondary">Submit</button>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="Classes.php"><button class="btn btn-dark me-md-2" type="button">Home</button></a>
  </div>

</form>

</section>
	
<!--balsh ya mulham-->

<!--<div class="wrapper">

    <form class="" action="" method="post" autocomplete="off">
      <div style="display: flex; flex-direction: row;">
        <input type="text" name="Course_Name" class="input text" placeholder="Course Name"required value="">
        <input type="text" name="Course_Code" class="input text" style="margin-left: 14px;" placeholder="Course Code"required value="">
      
</div>

<form action="" method="post">
<div style="display: flex; ">

 




  </div>
  <br>

<?php
/*
echo '<select id="mySelect">';
$query ="SELECT * FROM tbluser where role = 'Instructor'";
$result = $conn->query($query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['id'] . '" id="' . $row['id'] . '">' . $row['Name'] . '</option>';
}
echo '</select>';*/
?>
<br>
<input type="submit" id="submit" name="submit">
    </form>
    <?php 
if(isset($_POST['submit'])){

 $Course_Name=$_POST['Course_Name'];
 $Course_Code=$_POST['Course_Code'];
$room=$_POST['room'];
//$did=$_SESSION['did'] ;
$Name=$_POST['Name'];

//$name=$_POST['Name'];
$hour=$_POST['hour'];
$year=$_POST['year'];
$section=$_POST['section'];

$semester=$_POST['semester'];
$day=$_POST['day'];

$query = "SELECT id from tbluser WHERE Name = '$Name' and role = 'Instructor' ";
$result = $conn->query($query);
$_SESSION['id']= $Name;

     if( !empty($Course_Name) && !empty($Course_Code)&& !empty($room)&& !empty($Name)&& !empty($hour)&& !empty($year)&& !empty($section)&& !empty($semester)&& !empty($day)){
       
        $query = "INSERT INTO classes ( Course_Name,Course_Code,Room,Name_Of_Doctor,hour,Years,Semester,day,section) VALUES('$Course_Name','$Course_Code','$room','$Name','$hour','$year','$semester','$day','$section')";
      $result = $conn->query($query);
      
      
    


      $id = $_SESSION['id'];
        $sql= mysqli_query($conn," SELECT classes.class_id AS last_classes From classes ORDER BY classes.class_id DESC limit 1");
        $print_data=mysqli_fetch_row($sql);
       
       $query = " INSERT INTO `classesofinstructor`(`id`, `class_id`) VALUES ('$Name','$print_data[0]')";
       ///////////////////////////////////////////////////////////
       mysqli_query($conn, $query);
       if($result){
        header('Location: ShowAllClasses.php');      }
        else echo '<h1>error </h1>';
         
    }else echo '<h1>please select all data </h1>'; 
  }
//
?>
</sectin>

  </body>
</html>
  </body>
</html>