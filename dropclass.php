<?php 
	if (isset($_GET["id"])){
		$id = $_GET["id"];
		$servername="localhost";
		//require 'connection.php';
		$username="root";
		$password="";
		$database="university";
		$connection = new mysqli($servername, $username, $password, $database);
		$sql = "DELETE FROM classes WHERE class_id=$id";
		$connection -> query($sql);

		
	header("Location:/uniAttendance/ShowAllClasses.php");
	exit;
	
	}
	?>