<?php 
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

		$query = " select * from classesofstudents";
		$connection -> query($query);

		/*if ('class_id'==$_GET['idofclass']&& 'Student_id'==$idofstudent){

			 echo 'this students is alredy register ';
		}
else*/
$query = " select * from classesofstudents where Student_id= '$idofstudent' and class_id='$_GET[idofclass]'  ";
$result=mysqli_query($connection,$query);
if($result->num_rows>0){
	 
	echo "<script> alert('This student is already registered'); </script>";
	

	//header("Location:/uniAttendance/RegisterStudentsInClass.php");

}  //header('Location: RegisterStudentsInClass.php');


 else{
             $query = " INSERT INTO `classesofstudents`(`class_id`, `Student_id`) VALUES ('$_GET[idofclass]','$idofstudent')";
             $result=mysqli_query($connection,$query);


	header("Location:/uniAttendance/RegisterStudentsInClass.php");
	exit;
}


	}
	
	?>




	