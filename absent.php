<?php
	session_start();
	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		header('Location: login.html');
	}
	require 'connectiion.php';
  if (isset($_GET["idofclass"])){
		$idofclass = $_GET["idofclass"];
   $_SESSION['idofclass'] =  $_GET["idofclass"];

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
    

    <title>Class of Instructor</title>
  </head>
  <body>

    <!--<div class="topnav">
    <a class="active" href="Classesofinstructor.php">Classes</a>
    <a href="addStudentbyinstructor.php">Register </a>

  <a class="active" href="ShowAllStudentbyinstructor.php">Show all Students</a>
  <a href="changepassword.php">change password</a>

  <a href="login.html">LogOut</a>
  <?=$_GET["idofclass"]?>
</div>-->

  <p class="text-center fs-1 fw-b">List Of Students To Regitser Into Class</p>

<?php
require_once ('connection.php');
$aid = $_SESSION['id'];
$query = " SELECT * FROM students";

  $result = mysqli_query($link, $query);
  if (($result) && (mysqli_num_rows($result) > 0)){
  //$query = "SELECT * from students";
  //$result = mysqli_query($link, $query);
		if (($result) && (mysqli_num_rows($result) > 0)){
      echo '<div  class ="form" id="form">';

			echo '<table class="table table-hover">'; //styled-table
			echo '<thead class="bg-dark"><tr ><th style="color: white;">#</th> <th style="color: white;">Name</th><th style="color: white;">Last Name</th><th style="color: white;">Major</th><th style="color: white;">Email</th><th style="color: white;">PhoneNumber</th><th style="color: white;">Present</th><th style="color: white;">Absent</th></tr></thead>';
			while ($row = mysqli_fetch_assoc($result)){
				echo '<tr><td>' . $row['Student_id'] . '</td><td>' . $row['Name'] . '</td><td>' . $row['Last_Name'] . '</td><td>' . $row['major']. '</td><td>' . $row['Email']. '</td><td>' . $row['Phone']. '</td>'
                .'<td><a href="presentStudent.php?idofstudent='.$row['Student_id'].'">	<button type="button" class="btn btn-success" id="submit">Set As Present</button>'
        .'<td><a href="absentStudent.php?idofstudent='.$row['Student_id'].'">	<button type="button" class="btn btn-danger" id="submit">Set As Absent</button>';
				
        
			}
			echo '</table>';
		}
  }
	//	}
    else
    echo "<h1 >There Are No Students </h1>"
?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="studentsClass.php"><button class="btn btn-dark btn-outline-info me-md-2" type="button">Home</button></a>
    </div>