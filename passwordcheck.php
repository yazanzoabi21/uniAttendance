<?php 
session_start();
/*if(isset($_POST['aid']) && isset($_POST['apassword'])) { 
    session_start();
      require ('connectiion.php');
      extract($_POST); //$sid and $spasswd
      $aid = mysqli_real_escape_string($conn, $aid);*/
      include "connectiion.php";

if (isset($_SESSION['loggedin']) ) {
//loggedin
//&& isset($_SESSION['apassword'])
   // require ('connectiion.php');

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: changepassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changepassword.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: changepassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	//$op = md5($op);
    	//$np = md5($np);
        $aid = $_SESSION['loggedin'];

        $sql = "SELECT password
                FROM tbluser WHERE 
                id='$aid' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE tbluser
        	          SET password='$np'
        	          WHERE id='$aid'";
        	mysqli_query($conn, $sql_2);
        	header("Location: changepassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: changepassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: changepassword.php");
	exit();
}

}else{
     header("Location: login.html");
     exit();
}