<?php 


if (isset($_GET["idofclassToshowStudents"])){
    $idofclassToshowStudents = $_GET["idofclassToshowStudents"];
  $_SESSION['idofclassToshowStudents'] =  $_GET["idofclassToshowStudents"];
  
  }
	if (isset($_GET["idofstudent"])){
		//require_once('connection.php');
session_start();
		$idofstudent = $_GET["idofstudent"];
		//$idofclass = $_GET["idofclass"];

		$servername="localhost";
		//require 'connection.php';
		$username="root";
		$password="";
		$database="university";
		$connection = new mysqli($servername, $username, $password, $database);
		//$idofclass = $_SESSION["idofclass"];
		$_GET["idofclass"] = $_SESSION["idofclass"];

	

		    $query = " INSERT INTO `attendance`(`class_id`, `Student_id`,AbsentOrPresent,AVG) VALUES ('$_SESSION[idofclassToshowStudents]','$idofstudent','present','0')";
             $result=mysqli_query($connection,$query);


	header("Location:/uniAttendance/studentsClass.php");
}


	
	
	?>




	