<?php 
	if (isset($_GET["id"])){
		$id = $_GET["id"];
		$servername="localhost";
		//require 'connection.php';
		$username="root";
		$password="";
		$database="university";
		$connection = new mysqli($servername, $username, $password, $database);
		$sql = "DELETE FROM students WHERE student_id=$id";
		$connection -> query($sql);

		
	header("Location:/uniAttendance/ShowAllStudents.php");
	exit;
	
	}
	?>




	